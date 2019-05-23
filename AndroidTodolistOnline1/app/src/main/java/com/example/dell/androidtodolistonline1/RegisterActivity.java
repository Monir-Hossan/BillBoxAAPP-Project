package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.kosalgeek.android.md5simply.MD5;
import com.kosalgeek.genasync12.AsyncResponse;
import com.kosalgeek.genasync12.PostResponseAsyncTask;

import java.util.HashMap;

public class RegisterActivity extends AppCompatActivity implements View.OnClickListener {
    final String TAG = "RegisterActivity";
    EditText etEmail, etPassword, etConfirmPassword, etMeter;
    Button btnRegister;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        etEmail = (EditText)findViewById(R.id.etEmail);
        etPassword = (EditText)findViewById(R.id.etPassword);
        etConfirmPassword = (EditText)findViewById(R.id.etConfirmPassword);
        etMeter = (EditText)findViewById(R.id.etMeter);
        btnRegister = (Button)findViewById(R.id.btnRegister);
        btnRegister.setOnClickListener (this);


    }
    @Override
    public void onClick (View v) {
        if(!emptyValidate(etEmail, etPassword, etConfirmPassword, etMeter)){
            if(passwordValidate(etPassword, etConfirmPassword)){
                String email = etEmail.getText().toString();
                String password = MD5.encrypt(etPassword.getText().toString());
                String account_no = etMeter.getText().toString();

                HashMap<String, String> postData = new HashMap<>();
                postData.put("email", email);
                postData.put("password", password);
                postData.put("account_no", account_no);

                PostResponseAsyncTask task1 = new PostResponseAsyncTask(this, postData, new AsyncResponse() {
                    @Override
                    public void processFinish(String s) {
                        Log.d(TAG, s);
                        if(s.contains("ErrorInsert")){
                            Toast.makeText(RegisterActivity.this, "Something went wrong. Data was not inserted.", Toast.LENGTH_LONG).show();
                        }else {
                            Intent in = new Intent(getApplicationContext(), NewLogin.class);
                            startActivity(in);
                        }
                    }
                });
                task1.execute("http://192.168.0.104/todolistonline/register.php");
            }
            else{  // not equals
                Toast.makeText(getApplicationContext(), "Make sure your password is the same to confirm password", Toast.LENGTH_LONG).show();
            }
        } else{
            Toast.makeText(getApplicationContext(), "Fill out all the fields", Toast.LENGTH_LONG).show();
        }
    }

    private boolean emptyValidate(EditText etEmail, EditText etPassword, EditText etConfirmPassword, EditText etMeter){
        String email = etEmail.getText().toString();
        String password = etPassword.getText().toString();
        String confirm = etConfirmPassword.getText().toString();
        String account_no = etMeter.getText().toString();
        return (email.isEmpty() && password.isEmpty() && confirm.isEmpty() && account_no.isEmpty());
    }

    private boolean passwordValidate(EditText etPassword, EditText etConfirmPassword){
        String password = etPassword.getText().toString();
        String confirm = etConfirmPassword.getText().toString();
        return (password.equals(confirm));
    }
}


