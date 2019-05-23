package com.example.dell.androidtodolistonline1;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import com.example.dell.androidtodolistonline1.api.ApiBill;
import com.example.dell.androidtodolistonline1.api.ApiBillInterface;
import com.example.dell.androidtodolistonline1.pojo.Bill;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class BillActivity extends AppCompatActivity {

    private ApiBillInterface apiBillInterface;
    Bill bill;

    TextView name, billingMonth,billNo,kwhConsumed, acno,energyCharge,others,total,
            dueBill,biilPayafterduedate,tansactionId,submittDate;

    @Override
    protected void onCreate ( Bundle savedInstanceState ) {
        super.onCreate ( savedInstanceState );
        setContentView ( R.layout.activity_bill );

        name =(TextView) findViewById ( R.id.name );
        billingMonth =(TextView) findViewById ( R.id.billingMonth);
        billNo =(TextView) findViewById ( R.id.billNo);
        kwhConsumed =(TextView) findViewById ( R.id.kwhConsumed);
        acno =(TextView) findViewById ( R.id.accno );
        energyCharge =(TextView) findViewById ( R.id.energyCharge);
        others =(TextView) findViewById ( R.id.others);
        total =(TextView) findViewById ( R.id.total);
        dueBill =(TextView) findViewById ( R.id.dueBill);
        biilPayafterduedate =(TextView) findViewById ( R.id.biilPayafterduedate);

        tansactionId =(TextView) findViewById ( R.id.tansactionId);

        submittDate =(TextView) findViewById ( R.id.submittDate);



        apiBillInterface = ApiBill.getApiBill ().create ( ApiBillInterface.class );
    }


    @Override
    protected void onResume () {
        super.onResume ( );

        this.callForData();
    }

    public void makeToast( String message){
        Toast.makeText ( BillActivity.this , message, Toast.LENGTH_LONG ).show ();
    }

    public void callForData ( ) {
        Bundle bundle = getIntent().getExtras ();
        String account_no = bundle.getString ( "account_no" );


        makeToast ( "Working " + String.valueOf ( account_no ));

        Call<Bill> call = apiBillInterface.getByAccountNo (account_no);

        call.enqueue ( new Callback<Bill> ( ) {
            @Override
            public void onResponse ( Call <Bill> call, Response<Bill> response ) {
                bill = response.body ();
                setData ( bill );
            }

            @Override
            public void onFailure ( Call <Bill> call, Throwable t ) {
                makeToast ( "Not Found "+t.toString ());
            }
        } );
    }

    public void setData(Bill bill){

        name.setText ( bill.getNameAddress () );
        billingMonth.setText ( bill.getBillingMonth () );
        billNo.setText ( bill.getBillNo () );
        acno.setText ( bill.getAccountNo () );
        kwhConsumed.setText ( bill.getKwhConsumed () );
        energyCharge.setText ( bill.getEnergyCharge () );
        others.setText ( bill.getOthers () );
        total.setText ( bill.getTotalBill () );
        biilPayafterduedate.setText ( bill.getBiilPayafterduedate () );
        dueBill.setText ( bill.getDueBill () );
        tansactionId.setText ( bill.getTansactionId () );
        submittDate.setText ( bill.getSubmittDate () );


    }
    public void BankMenu ( View view ) {
        Intent intent = new Intent ( this,BankMenu.class );
        startActivity ( intent );
    }
    public void BillsActivity ( View view ) {
        Intent intent = new Intent ( this,BillsActivity.class );
        startActivity ( intent );
    }
}
