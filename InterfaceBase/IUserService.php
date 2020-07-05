<?php
namespace DesignPatterns\InterfaceBase;


interface IUserService
{
    public function register($cellPhone, $password);
    public function login($cellphone, $password);
    public function getUserInfoById($id);
}

//如果我们这个时候想要实现删除用户的功能，这个时候我们该怎么做呢？
//你也许会说，在IserService方法中增加deleteUserById方法
//这样是可以解决问题，但是也隐藏了一些安全隐患

//删除用户是一个非常慎重的操作，我们希望只有通过后台管理系统，
//有权限的用户才能操作，如果我们将它放在userService中，
//那么所有使用userService类的接口都有可能被其他业务系统使用，
//可能导致误删除用户的情况存在。

//正确的做法是，我们需要将删除接口的功能单独放在另外一个接口中，
//使用接口隔离来限制部分接口只能单独被所对应的调用者使用。
//而不是强迫其他调用者也依赖这部分不会被调用到的接口功能