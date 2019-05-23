package com.example.dell.androidtodolistonline1;


import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.ListView;
import android.widget.Toast;

import com.example.dell.androidtodolistonline1.adapter.BillAdapter;
import com.example.dell.androidtodolistonline1.api.ApiBill;
import com.example.dell.androidtodolistonline1.api.ApiBillInterface;
import com.example.dell.androidtodolistonline1.pojo.Bill;

import java.util.ArrayList;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class BillsActivity extends AppCompatActivity {

    private ApiBillInterface apiBillInterface;

    ListView listView;
    BillAdapter adapter;

    ArrayList<Bill> bills;

    @Override
    protected void onCreate ( Bundle savedInstanceState ) {
        super.onCreate ( savedInstanceState );
        setContentView ( R.layout.activity_bills );
        bills = new ArrayList <> (  );
        listView=(ListView) findViewById ( R.id.billListView );
        apiBillInterface = ApiBill.getApiBill ().create ( ApiBillInterface.class );
    }


    public void makeToast(String message){
        Toast.makeText ( BillsActivity.this , message, Toast.LENGTH_LONG ).show ();
    }

    public void callForData ( View view ) {
        makeToast ( "Working ");
        Call<ArrayList<Bill>> call = apiBillInterface.getAll ();

        call.enqueue ( new Callback <ArrayList <Bill>> ( ) {
            @Override
            public void onResponse ( Call <ArrayList <Bill>> call,Response<ArrayList <Bill>> response ) {
                bills = response.body ();
                adapter = new BillAdapter ( BillsActivity.this, bills );
                listView.setAdapter ( adapter );
                //makeToast ( String.valueOf ( bills.get ( 4 ).toString () ) );
            }

            @Override
            public void onFailure ( Call <ArrayList <Bill>> call,Throwable t ) {
                makeToast ( "Not Found "+t.toString ());
            }
        } );


   }
}
