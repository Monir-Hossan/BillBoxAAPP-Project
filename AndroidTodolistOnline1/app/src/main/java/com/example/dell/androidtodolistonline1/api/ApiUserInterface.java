package com.example.dell.androidtodolistonline1.api;

import com.example.dell.androidtodolistonline1.pojo.Login;
import com.example.dell.androidtodolistonline1.pojo.User;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.POST;

/**
 * Created by lal monir on 2/17/2018.
 */

public interface ApiUserInterface {

    @POST("login.php")
    Call<Login> getAuthUser(@Body User user);

    @POST("resgistration.php")
    Call<User> saveUser(@Body User user);



}
