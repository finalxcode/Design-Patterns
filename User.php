<?php

namespace DesignPatterns;


class User
{
    public $userId;
    public $userName;
    public $email;
    public $telephone;
    public $provinceOfAddress;//省
    public $cityOfAddress;//市
    public $regionOfAddress;//区
    public $detailedAddress;//详细地址
}

//这个类是否满足职责单一呢？
//一种观点，认为user类中包含的都是跟用户相关的信息，属性都是这个业务模型的，满足单一职责
//另一种观点，认为地址信息在user类中占的比重大，可以拆分成userAddress类，
//user类保留除地址信息之外的其他信息，这样职责才单一。

//如果用户的信息还跟物流信息挂钩，那么按照第二种观点拆分的才更加合理。
//从这个例子上可以看出来，评价一个类是否职责单一，
//都是在某些场景下或者未来的某个需求下。我们并没有⼀个⾮常明确的、可以量化的标准，
//可以说，这是件⾮常主观、仁者⻅仁智者⻅智的事情。
//实际上，我们也没必要过于未⾬绸缪，过度设计。
//我们可以先写⼀个粗粒度的类，满⾜业务需求。
//随着业务的发展，如果粗粒度的类越来越庞⼤，代码越来越多，
//这个时候，我们就可以将这个粗粒度的类，拆分成⼏个更细粒度的类。进行所谓的重构。