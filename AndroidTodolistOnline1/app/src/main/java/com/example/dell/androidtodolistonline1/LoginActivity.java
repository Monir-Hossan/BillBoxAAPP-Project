package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.kosalgeek.android.md5simply.MD5;
import com.kosalgeek.genasync12.AsyncResponse;
import com.kosalgeek.genasync12.ExceptionHandler;
import com.kosalgeek.genasync12.PostResponseAsyncTask;

import java.util.HashMap;

public class LoginActivity extends AppCompatActivity implements View.OnClickListener {
    final String TAG = "LoginActivity";
    EditText etEmail, etPassword, etMeter;
    Button btnLogin;
    TextView tvRegister;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        etEmail = (EditText)findViewById(R.id.etEmail);
        etPassword = (EditText)findViewById(R.id.etPassword);
        etMeter = (EditText)findViewById(R.id.etMeter);
        btnLogin = (Button)findViewById(R.id.btnLogin);
        btnLogin.setOnClickListener(this);

        tvRegister = (TextView)findViewById(R.id.tvRegister);
        tvRegister.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent in = new Intent(getApplicationContext(), RegisterActivity.class);
                startActivity(in);
            }
        });
    }

    private boolean emptyValidate(EditText etEmail, EditText etPassword, EditText etMeter){
        String email = etEmail.getText().toString();
        String password = etPassword.getText().toString();
        String account_no = etMeter.getText().toString();
        return (email.isEmpty() && password.isEmpty() && account_no.isEmpty());
    }
    String password = "";
    @Override
    public void onClick(View v) {

        final String email = etEmail.getText().toString();
        password =  MD5.encrypt(etPassword.getText().toString());
        final String account_no = etMeter.getText().toString();

        HashMap<String, String> loginData = new HashMap<>();
        loginData.put("email", email);
        loginData.put("password", password);
        loginData.put("account_no", account_no);

        PostResponseAsyncTask loginTask = new PostResponseAsyncTask(this, loginData, new AsyncResponse() {
            @Override
            public void processFinish(String s) {
                Log.d(TAG, s);
                if(s.contains("LoginSuccess")){
                    SharedPreferences pref = getSharedPreferences("loginData", MODE_PRIVATE);
                    SharedPreferences.Editor editor = pref.edit();
                    editor.putString("email", email);
                    editor.putString("password", password);
                    editor.putString("account_no", account_no);
                    editor.commit();
                    Intent in = new Intent(getApplicationContext(),NewMeter.class);
                    startActivity(in);
                }
                else{
                    Toast.makeText(getApplicationContext(), "Something went wrong. Cannot login.", Toast.LENGTH_LONG).show();
                }
            }
        });
        loginTask.setExceptionHandler(new ExceptionHandler() {
            @Override
            public void handleException(Exception e) {
                if(e != null && e.getMessage() != null){
                    Log.d(TAG, e.getMessage());
                }
            }
        });
        loginTask.execute("http://192.168.0.4/todolistonline/login.php");
    }
}
