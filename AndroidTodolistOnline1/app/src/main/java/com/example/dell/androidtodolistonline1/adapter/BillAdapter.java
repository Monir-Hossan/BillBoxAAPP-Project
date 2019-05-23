package com.example.dell.androidtodolistonline1.adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.TextView;

import com.example.dell.androidtodolistonline1.pojo.Bill;
import com.example.dell.androidtodolistonline1.BillActivity;
import com.example.dell.androidtodolistonline1.R;

import java.util.ArrayList;

/**
 * Created by lal monir on 12/9/2017.
 */

public class BillAdapter extends ArrayAdapter {
    Context context;
    ArrayList<Bill> billList;
    public BillAdapter ( Context context,ArrayList<Bill> billList ) {
        super ( context,R.layout.bill_row_layout,  billList);
        this.context = context;
        this.billList = billList;

    }

    private static class ViewHolder{
        TextView name;

        Button details;
    }

    @Override
    public View getView ( final int position,View convertView,ViewGroup parent ) {
        BillAdapter.ViewHolder viewHolder;
        if(convertView == null){
            LayoutInflater inflater = (LayoutInflater)context.getSystemService ( Context.LAYOUT_INFLATER_SERVICE );

            convertView = inflater.inflate ( R.layout.bill_row_layout, parent, false  );

            viewHolder = new ViewHolder ();

            viewHolder.name = (TextView) convertView.findViewById ( R.id.txtName );

            viewHolder.details = (Button) convertView.findViewById ( R.id.btnDetails );

            convertView.setTag ( viewHolder  );


        }else {
            viewHolder = (ViewHolder) convertView.getTag ();
        }

        viewHolder.name.setText ( "Name : " +billList.get(position).getNameAddress () );

        viewHolder.details.setOnClickListener ( new View.OnClickListener ( ) {
            @Override
            public void onClick ( View v ) {
            Intent intent = new Intent ( getContext (), BillActivity.class );

               Bill bill = billList.get ( position );

                String accounnt_no = bill.getAccountNo ();
                intent.putExtra ( "account_no", accounnt_no  );

                getContext ().startActivity ( intent );
            }
        } );

        return convertView;
    }
}
