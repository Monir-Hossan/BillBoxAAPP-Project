package com.example.dell.androidtodolistonline1.api;

import com.example.dell.androidtodolistonline1.pojo.Bill;

import java.util.ArrayList;

import retrofit2.Call;
import retrofit2.http.GET;
import retrofit2.http.Query;

/**
 * Created by lal monir on 1/6/2018.
 */

public interface ApiBillInterface {

  @GET("jesonelectricity.php")
    Call<ArrayList<Bill>> getAll();

  @GET("electicity_bill_single.php")
  Call<Bill> get( @Query( "id" ) long id );

  @GET("billbyacno.php")
  Call<Bill> getByAccountNo(
        @Query( "account_no" ) String account_no  );

}
