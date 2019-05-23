package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class StartupActivity extends AppCompatActivity {
    private Button electricityButton, waterButton, gasButton;

    /*String emailStored = "", passwordStored = "";*/
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_startup);


      /* new Handler().postDelayed(new Runnable(){
            @Override
            public void run() {
                SharedPreferences pref = getSharedPreferences("loginData", MODE_PRIVATE);
                SharedPreferences.Editor editor = pref.edit();
                editor.clear();
                editor.commit();
                emailStored = pref.getString("email", null);
                passwordStored = pref.getString("password", null);

                if(emailStored == null){
                    Intent in = new Intent(getApplicationContext(), LoginActivity.class);
                    startActivity(in);
                }
                else{
                    Intent in = new Intent(getApplicationContext(), MainPageActivity.class);
                    startActivity(in);
                }
                StartupActivity.this.finish();
            }
        }, 3000);*/
    }

    public void LoginActivity ( View view ) {
        Intent intent = new Intent ( this,NewLogin.class );
        startActivity ( intent );
    }
}
