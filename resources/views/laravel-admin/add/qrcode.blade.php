<div style="font-size:18px;border:none;">
    <table style="margin: 0 auto;font-size:14px;background-color:#fff;">
        <tr style="height:35px;background-color:#fff;">
            <td>最終更新ユーザー名</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>Administrator</td>
        </tr>
        <tr style="height:35px;background-color:#fff;">
            <td>最終更新日時</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>2022/08/01&nbsp;20:30</td>
        </tr>
    </table>
</div>

<div style="text-align:center;margin-top:20px;margin-bottom:30px;">
    {!! QrCode::size(230)->generate('1234567') !!}
</div>

<div class="print">
    <button type="submit" class="btn btn-success">QRコード更新</button>
</div>


<style>
    table {
        border:none;
    }
    td {
        background-color:#fff!important;
        font-size:12px;
    }

    .print {
        text-align:center;
        margin-bottom:0px;
        border-bottom:1px solid #d2d6de;
        padding-bottom:40px;
    }
</style>