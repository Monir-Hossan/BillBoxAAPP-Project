package com.example.dell.androidtodolistonline1.api;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

/**
 * Created by lal monir on 1/6/2018.
 */

public class ApiBill {
    public static final String BASEURL = "http://192.168.0.104/try/admin/ElectricityBill/";

    public static Retrofit retrofit = null;

    public static Retrofit getApiBill() {
        if(retrofit== null){
            retrofit = new Retrofit.Builder ().baseUrl ( BASEURL )
                    .addConverterFactory ( GsonConverterFactory.create() ).build ();
        }
        return retrofit;
    }
}
