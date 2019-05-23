
package com.example.dell.androidtodolistonline1.pojo;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Bill {
    @SerializedName("id")
    @Expose
    private String id;
    @SerializedName("name_address")
    @Expose
    private String nameAddress;
    @SerializedName("billing_month")
    @Expose
    private String billingMonth;
    @SerializedName("bill_no")
    @Expose
    private String billNo;
    @SerializedName("kwh_consumed")
    @Expose
    private String kwhConsumed;
    @SerializedName("account_no")
    @Expose
    private String accountNo;
    @SerializedName("energy_charge")
    @Expose
    private String energyCharge;
    @SerializedName("others")
    @Expose
    private String others;
    @SerializedName("total_bill")
    @Expose
    private String totalBill;
    @SerializedName("due_bill")
    @Expose
    private String dueBill;
    @SerializedName("biil_payafterduedate")
    @Expose
    private String biilPayafterduedate;
    @SerializedName("tansaction_id")
    @Expose
    private String tansactionId;
    @SerializedName("submitt_date")
    @Expose
    private String submittDate;

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNameAddress() {
        return nameAddress;
    }

    public void setNameAddress(String nameAddress) {
        this.nameAddress = nameAddress;
    }

    public String getBillingMonth() {
        return billingMonth;
    }

    public void setBillingMonth(String billingMonth) {
        this.billingMonth = billingMonth;
    }

    public String getBillNo() {
        return billNo;
    }

    public void setBillNo(String billNo) {
        this.billNo = billNo;
    }

    public String getKwhConsumed() {
        return kwhConsumed;
    }

    public void setKwhConsumed(String kwhConsumed) {
        this.kwhConsumed = kwhConsumed;
    }

    public String getAccountNo() {
        return accountNo;
    }

    public void setAccountNo ( String accountNo ) {this.accountNo = accountNo;
    }

    public String getEnergyCharge() {
        return energyCharge;
    }

    public void setEnergyCharge(String energyCharge) {
        this.energyCharge = energyCharge;
    }

    public String getOthers() {
        return others;
    }

    public void setOthers(String others) {
        this.others = others;
    }

    public String getTotalBill() {
        return totalBill;
    }

    public void setTotalBill(String totalBill) {
        this.totalBill = totalBill;
    }

    public String getDueBill() {
        return dueBill;
    }

    public void setDueBill(String dueBill) {
        this.dueBill = dueBill;
    }

    public String getBiilPayafterduedate() {
        return biilPayafterduedate;
    }

    public void setBiilPayafterduedate(String biilPayafterduedate) {
        this.biilPayafterduedate = biilPayafterduedate;
    }

    public String getTansactionId() {
        return tansactionId;
    }

    public void setTansactionId(String tansactionId) {
        this.tansactionId = tansactionId;
    }

    public String getSubmittDate() {
        return submittDate;
    }

    public void setSubmittDate(String submittDate) {
        this.submittDate = submittDate;
    }
}
