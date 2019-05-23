package com.example.dell.androidtodolistonline1;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

public class PaymentPage extends AppCompatActivity {

    @Override
    protected void onCreate ( Bundle savedInstanceState ) {
        super.onCreate ( savedInstanceState );
        setContentView ( R.layout.activity_payment_page );
    }
    public void displayToast( View view){

        Toast.makeText ( PaymentPage.this,"Payment sucessfull",Toast.LENGTH_SHORT).show ();


    }
}
