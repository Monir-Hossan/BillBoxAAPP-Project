package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class BillPage extends AppCompatActivity {

    @Override
    protected void onCreate ( Bundle savedInstanceState ) {
        super.onCreate ( savedInstanceState );
        setContentView ( R.layout.activity_bill_page );
    }


    public void BankMenu ( View view ) {
        Intent intent = new Intent ( this,BankMenu.class );
        startActivity ( intent );
    }
}
