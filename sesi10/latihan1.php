<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 1</title>
</head>
<body>
    <form nama="latihan" method="POST" onsubmit="return checkform(this)">
<div>
        NIM
     <input type="text" name="txNIM">
</div>
<div>
        JENIS KELAMIN
       <input type="radio" name="txJK" value="L">laki-laki

       <input type="radio" name="txJK" value="L">perempuan
<div>
        JURUSAN
    <select name="txJURUSAN">
        <option value="MTI">MTI</option>
        <option value="KAB">KAB</option>
        <option value="DSN">desain</option>
    </select>
</div>
        HOBI
        <input type="checkbox" name="txhobibola" value="1">sepak bola
        <input type="checkbox" name="txhobivoly" valae="1">voly
        <input type="checkbox" name="txhobibulutangkis" value="1">bulu tangkis
        <input type="checkbox" name="txhobimotorvlog" value="1">motor vlog
        <input type="checkbox" name="txhobitenismeja" value="1">tenis meja
</div>
        <button type="submit"> kirim data</button>
    
    
    </form>
    <script type="text/javascript">
        function  checkform(frm){
            let form = frm.elements;
            let NIM = form.namedItem("txNIM").value;
            let jksel = form.namedItem("txJK").value;
            let jur = form.namedItem("txJURUSAN").value;
            let hobi =[
                form.namedItem("txhobibola").checked,
                form.namedItem("txhobivoly").checked,
                form.namedItem("txhobibulutangkis").checked,
                form.namedItem("txhobimotorvlog").checked,
                form.namedItem("txhobitenismeja").checked
            ];
            
            console.log("NIM:"+NIM);
            console.log("Jenis kelamin:"+jksel);
            console.log("jurusan:"+jur);
            console.log("hobi:"+hobi);

            return false;
            
            }
            </script>
    
</body>
</html>