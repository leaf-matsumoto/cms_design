<div style="font-size:18px;border:none;">
    <table style="margin: 0 auto;">
        <tr style="height:35px;">
            <td>最終更新ユーザー名</td>
            <td>&nbsp;：&nbsp;</td>
            <td>Administrator</td>
        </tr>
        <tr style="height:35px;">
            <td>最終更新日時</td>
            <td>&nbsp;：&nbsp;</td>
            <td>2022/08/01&nbsp;20:30</td>
        </tr>
    </table>
</div>

<div style="text-align:center;margin-top:20px;margin-bottom:30px;">
    {!! QrCode::size(250)->generate('1234567') !!}
</div>

<div style="text-align:center;margin-bottom:20px;" class="print">
    <button type="submit" class="btn btn-success">QRコード更新</button>
</div>