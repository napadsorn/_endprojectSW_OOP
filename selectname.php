<!DOCTYPE html>

<html>
<head>
    <title>Dropdownlist Type Subtype</title>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	
</head>

<body>
    <div id="wrapper">        
       
            <!-- dropdownlist Type -->
            <div class="row">
                <div class="col-md-1"><label>คณะ</label></div>
                <div class="col-md-3">
                    <select id="ddltype" class="form-control" onchange="onTypeChange($(ddlsubtype),$(ddlprod));"></select>
                </div>
            
                <div class="col-md-1"><label>สาขาวิชา</label></div>
                <div class="col-md-3">
                    <select id="ddlsubtype" class="form-control" onchange="onSubtypeChange($(ddlprod));">
                        <option value="0"> --- โปรดเลือกสาขาวิชา --- </option>
                    </select>
                </div>            
            
                <div class="col-md-1"><label>ชื่อบุคลากร</label></div>
                <div class="col-md-3">
                    <select id="ddlprod" class="form-control">
                        <option value="0"> --- โปรดเลือกชื่อบุคลากรผู้ร่วมทีมวิจัย --- </option>
                    </select>
                
            </div></div> 
               <p align="center"  > <input type="button" name="button" id="createRows" value="เพิ่มรายชื่อบุคลากร"> 
				    <tr><td colspan="3"><center>รายการที่เพิ่ม</center></td></tr>
          </div>   
               
   
    <script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            // on page loaded
            callAjax("faculty","","",$("#ddltype"));
        });
        function onTypeChange(ddlsubtypeobj,ddlprodobj) {
            callAjax("sakawicha",$("#ddltype").val(),"",ddlsubtypeobj);            
            clearOptionItem(ddlprodobj)
        }
        function onSubtypeChange(ddlprodobj) {
            callAjax("nameperson",$("#ddltype").val(),$("#ddlsubtype").val(),ddlprodobj);
        }
        function clearOptionItem(ddlobj) {
            $(ddlobj).find("option").remove().end();
            $(ddlobj).append("<option value='0'> --- Please select item --- </option>");
        }
        function callAjax(s_mode,s_facid,s_sakaid,ddlobj) {
            $.ajax({
                type        : "GET" ,
                url         : "gen_datasource.php" ,
                data        : { mode : s_mode , fac_id : s_facid , saka_id : s_sakaid } ,
                dataType    : "json" ,
                success     : function(data) {
                    if (data.output != false) {
                        $(ddlobj).find("option").remove().end();
                        var option_val = data.output.split("|");                        
                        for (j = 0 ;  j < option_val.length ; j++) {
                            $(ddlobj).append(option_val[j]);
                        }
                    }
                },
                error       : function(data) {
                    console.log( data.statusText + '\n' + data.responseText);
                }
            });
        }
    </script>
</body>
</html>
