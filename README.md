# Design-Patterns
   关于设计原则的一些总结及思考
   
   #### 单一职责原则
   > `User`类

   #### 开闭原则
   > 改进之前：`chartDisplay`类, `lineChart`类， `pieChart`类
   > 改进之后：`chartDisplayV2`类, `lineChartV2`类， `pieChartV2`类, `AbstractChartDisplay`类

   #### 接口隔离原则
   > `IUserService`类

   #### 里氏替换原则
   > `SuperClass`类, `SubClass`类

   #### 依赖倒置原则
   > `ChartDisplay`类

   #### 迪米特原则
   > 改进之前：`Document`类， `HtmlDownloader`类， `Serialization`类
   > 改进之后：`DocumentV2`类，`DocumentFactory`类， `Serialization`类
   
