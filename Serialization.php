<?php
namespace DesignPatterns;


class Serialization
{
    public function serialize($object) {
        return serialize($object);
    }

    public function deserialize($str) {
        return unserialize($str);
    }
}
//单看这个类的设计，没有一点问题。不过，如果我们把它放到一定的应用场景里，
//那就还有继续优化的空间。假设在我们的项目中，有些类只用到了序列化操作，而另一些类只用到反序列化操作。
//那基于迪米特法则后半部分“有依赖关系的类之间，尽量只依赖必要的接口”，
//只用到序列化操作的那部分类不应该依赖反序列化接口。同理，只用到反序列化操作的那部分类不应该依赖序列化接口。
//根据这个思路，我们应该将Serialization类拆分为两个更小粒度的类，一个只负责序列化(Serializer类)，
//一个只负责反序列 化(Deserializer类)。拆分之后，使用序列化操作的类只需要依赖Serializer类，
//使用反序列化操作的类只需要依赖 Deserializer类。拆分之后的代码应该是

class Serializer {
    public function serialize($object) {
        return serialize($object);
    }
}

class Deserializer {
    public function deserialize($str) {
        return unserialize($str);
    }
}

//不知道你有没有看出来，尽管拆分之后的代码更能满足迪米特法则，但却违背了高内聚的设计思想。
//高内聚要求相近的功能要 放到同一个类中，这样可以方便功能修改的时候，修改的地方不至于过于分散。
//对于刚刚这个例子来说，如果我们修改了序列化的实现方式，比如从JSON换成了XML，
//那反序列化的实现逻辑也需要一并修改。在未拆分的情况下，我们只需要修改一个类即可。
//在拆分之后，我们需要修改两个类。显然，这种设计思路的代码改动范围变大了。
//如果我们既不想违背高内聚的设计思想，也不想违背迪米特法则，那我们该如何解决这个问题呢?
//实际上，通过引入两个接口 就能轻松解决这个问题，
//具体的代码如下:
interface Serializable {
    public function serialize($object);
}

interface Deserializable {
    public function deserialize($str);
}

class SerializationV2 implements Serializable, Deserializable {
    public function serialize($object) {
        return serialize($object);
    }

    public function deserialize($str) {
        return unserialize($str);
    }
}
//实际上，上面的的代码实现思路，也体现了“基于接口而非实现编程”的设计原则，结合迪米特法则，
//我们可以总结出一条新的 设计原则，那就是“基于最小接口而非最大实现编程”。有些同学之前问，
//新的设计模式和设计原则是怎么创造出来的？
//实际上，就是在大量的实践中，针对我们开发的痛点总结归纳出来的套路。