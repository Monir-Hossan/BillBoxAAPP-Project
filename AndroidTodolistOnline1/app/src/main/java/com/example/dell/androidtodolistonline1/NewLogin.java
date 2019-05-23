package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.example.dell.androidtodolistonline1.api.ApiBill;
import com.example.dell.androidtodolistonline1.api.ApiUserInterface;
import com.example.dell.androidtodolistonline1.pojo.Login;
import com.example.dell.androidtodolistonline1.pojo.User;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class NewLogin extends AppCompatActivity {
    public ApiUserInterface apiUserInterface;
    EditText etEmail, etPassword, etMeter;
    Login login;
    TextView tvRegister;
    @Override
    protected void onCreate ( Bundle savedInstanceState ) {
        super.onCreate ( savedInstanceState );
        setContentView ( R.layout.activity_new_login );

        etEmail = (EditText)findViewById(R.id.etEmail);
        etPassword = (EditText)findViewById(R.id.etPassword);
        etMeter = (EditText)findViewById(R.id.etMeter);
        login = new Login ();
        apiUserInterface= ApiBill.getApiBill ().create ( ApiUserInterface.class );
        tvRegister = (TextView)findViewById(R.id.tvRegister);
        tvRegister.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent in = new Intent(getApplicationContext(), RegisterActivity.class);
                startActivity(in);
            }
        });

    }

    public void getLogin ( View view ) {
        User user = new User();
        user.setEmail ( etEmail.getText ().toString () );
        user.setPassword ( etPassword.getText ().toString () );
        user.setAccountNo ( etMeter.getText ().toString () );


        Call<Login> callLogin = apiUserInterface.getAuthUser ( user );

        callLogin.enqueue ( new Callback <Login> ( ) {
            @Override
            public void onResponse ( Call <Login> call,Response<Login> response ) {

                login = response.body();
                if(login.getMessage ().equalsIgnoreCase ( "success" )){
                    makeToast ( "User successfully logeded!");
                    String userid = login.getUser ().getUserid ();
                    String email = login.getUser ().getEmail ();
                    String account_no = login.getUser ().getAccountNo ();
                    Intent in = new Intent(getApplicationContext(),HomeActivity.class);
                    in.putExtra ( "userid", userid );
                    in.putExtra (  "email", email );
                    in.putExtra ( "account_no", account_no  );
                    startActivity(in);

                }else {
                    makeToast ( "Please check username, password and meter account no!" );
                }
            }

            @Override
            public void onFailure ( Call <Login> call,Throwable t ) {
                makeToast ( "Not Working");
            }
        } );
    }

    public void makeToast(String message){
        Toast.makeText ( NewLogin.this , message, Toast.LENGTH_LONG ).show ();
    }

}
