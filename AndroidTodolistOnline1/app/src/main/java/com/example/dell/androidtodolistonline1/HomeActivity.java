package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.example.dell.androidtodolistonline1.api.ApiBill;
import com.example.dell.androidtodolistonline1.api.ApiBillInterface;
import com.example.dell.androidtodolistonline1.pojo.Bill;

public class HomeActivity extends AppCompatActivity {

    String  account_no;
    LinearLayout detailsLayout;
    TextView txtAccountNo;
    private ApiBillInterface apiBillInterface;

    Bill bill;

    @Override
    protected void onCreate ( Bundle savedInstanceState ) {
        super.onCreate ( savedInstanceState );
        setContentView ( R.layout.activity_home );

        detailsLayout =(LinearLayout) findViewById ( R.id.detailsLayout );

      txtAccountNo =(TextView) findViewById ( R.id.txtAccountNo );
        detailsLayout.setVisibility ( LinearLayout.INVISIBLE );
        apiBillInterface = ApiBill.getApiBill ().create ( ApiBillInterface.class );
        bill = new Bill ();
        this.getExtres();
    }

   public void getExtres(){
        Bundle bundle = getIntent().getExtras();

        account_no = bundle.getString ( "account_no" );
        txtAccountNo.setText ( account_no );

        makeToast ( account_no );

    }

    public void getDetails ( View view ) {
        Intent in = new Intent(getApplicationContext(), BillActivity.class);
        in.putExtra ( "account_no", account_no  );
        startActivity(in);

    }

    public void makeToast(String message){
        Toast.makeText ( HomeActivity.this , message, Toast.LENGTH_LONG ).show ();
    }
    public void NewMeter ( View view ) {
        Intent intent = new Intent ( this,NewMeter.class );
        startActivity ( intent );
    }
    public void MainPageActivity ( View view ) {
        Intent intent = new Intent ( this,MainPageActivity.class );
        startActivity(intent);
    }

}
