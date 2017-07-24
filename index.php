<!-- /*
 * https://github.com/akalankauk
 * Remote File Uploader By AE
*/ !-->

<html>
    <head>
        <title>Remote File Uploader By AE</title>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#1").hide();
        });
        function uploadfile()
        {
            var sds = document.getElementById("ae");
            if(sds == null){
            alert("Opps!Dont try to remove copyrights.\n Opps!Dont try to remove copyrights.\n");
        }
        var sdss = document.getElementById("aediv");
        if(sdss == null){
            alert("Opps!Dont try to remove copyrights.\n Opps!Dont try to remove copyrights.\n");
        }
        if(sdss != null)
        { 
            $("#1").show();
            $("#disp").html("");
            var url = encodeURIComponent($("#url").val());
            $.ajax({
                url: "upload.php",
                data: "url=" +url,
                type: 'post',
                success: function(data)
                {
                    var findsucc = data.indexOf("successfully");
                    out=data.split('**$$**');
                    if(findsucc!=-1)
                    {
                        $("#disp").css({"color": "green"});
                        $("#disp").html(out[0]);
                        $("#link").html("<a href='./upload/"+out[1]+"'>Click here</a> to view");
                        $("#1").hide();
                    }
                    else
                    {
                        $("#1").hide();
                        $("#disp").css({"color": "red"});
                        $("#disp").html(data);
                        $("#url").val("");
                    }
                }
            });
        }
        }
        </script>
    </head>
<body>
    <link rel="stylesheet" type="text/css" href="ae.css">
<div align='center' style='padding-top: 40px;color: #4e4e4e;'><h1>Remote File Uploader By AE</h1></div>
<div align='center' style='padding-top: 30px;'>
# Enter Remote File URL #<br><input type="text" name="url" id='url' size="35"> <input type="submit" value="Upload" name="submit" style='cursor: pointer;' onclick='uploadfile()'>&nbsp;&nbsp;<img src='ajax-loader.gif' id='1'>&nbsp;&nbsp;<br /><br /><div align='center'><span id='disp'></span></div><br>
<div id='link'></div><br />
<div style=" padding-left: 20px;font-size: 10px;color: #dadada;" id="aediv">
<h3><a href="https://github.com/akalankauk" id="ae" style="padding-right:0px; text-decoration:none;color: #08d866;">&copy;AE Developers</a></h3></div>
</div>
</body>
</html>
