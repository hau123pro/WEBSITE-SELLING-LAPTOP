<?php
include('connect.php');
$id=$_GET['ID'];
$sql="SELECT * from sanpham WHERE ID='".$id."' LIMIT 1";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
if ($row){
?>



        <div style="float: left;width: 392px;height:100%;background-color: rgba(235, 235, 235, 0.68);">
        <div style="float: left;width: 395px;height:400px;" id="ct1">
        <img style="width: 390px;height:395px;" id="anhct1"  src="<?php echo $row['Hinh']; ?>">
        </div>
        <div style="float:left;width: 395px;height:80px;" id="ct2">
        <span><img style="width: 100px;height:75px;"  src="<?php echo $row['Hinh']; ?>"></span>
        </div>
        </div>
        <div style="float: left;width: 485px;height:365px;margin-top: 28px;background-color: white;" id="ct3">
        <div style="font-size: 22px;margin-left: 10px;height: 50px;"><?php echo $row['Tensp']; ?></div>
        <div style="width:470px;margin-left: 5px;border-bottom: groove rgba(240, 240, 240, 0.265);"></div>
        <div style="width:180;height: 30px;height: 50px;background-color: rgba(220, 220, 220, 0.626);margin-left: 2px;margin-right: 2px;margin-top: 5px;">
        <div style="float: left;width: 95px;margin-top: 13px;margin-left: 22px;">Rating:</div>
        <div class="stars" >
        <form action="">
        <input class="star star-5" id="star-5" type="radio" name="star"/>
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star"/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star"/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star"/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star"/>
        <label class="star star-1" for="star-1"></label>
        </form>
        </div>
        </div>
        <div style="margin-top: 5px;background-color: white;height: 50px;padding-top: 15px;margin-left:2px;margin-right: 2px;"><span style="margin-left: 20px;">HotLine: 03145957</span></div>
        <div style="margin-top: 5px;background-color:rgba(220, 220, 220, 0.626);height: 50px;padding-top: 15px;margin-left:2px;margin-right: 2px;"><span style="margin-left: 20px;">Guarantee: SGU Team 8</span></div>
        <div style="margin-top: 5px;padding-top: 7px;background-color: white;margin-left:2px;margin-right: 2px;height: 30px;">
        <span style="margin-left: 20px;">Color</span>
        <div style="width:35px;height:35px;border-radius:50px;background-color: black;margin-left: 20px;margin-top: 5px;border: rgba(226, 226, 226, 0.762);border: groove;"></div>
        </div>
        <div style="margin-top: 0px;text-align:center;float:right" class="hients" id="<?php echo $row['ID'].'hien'; ?>">Detail</div>
        <div style="margin-top: 50px;padding-top: 7px;background-color: white;margin-left:2px;margin-right: 2px;height: 30px;">
        <span style="margin-left: 20px;font-size: 35px;"><?php echo number_format($row['Gia'],0,",",".")."VNĐ"; ?></span>
        </div>
        <div class="out" id="getout" onclick="out()"><input type="button" value="X" class="out1"></div>
        </div>
        <div style="width:485px;height:95px;float: left;">
        <div style="text-align:center;margin-top:15px;cursor:pointer">
        <div style="display:none;float:left;border:groove rgba(240, 240, 240, 0.265);width:50px;padding:auto;font-weight:20;height: 50px;line-height:45px;margin-left: 20px;">
        <input type="text" style="text-align:center;height:30px;outline:none;width: 30px;" id="sluong" value="1">
        </div>
        </div>
        <div style="float: left;height: 60px;width: 200px;border: groove; margin-left: 30px;border-radius: 50px;text-align: center;padding-top: 17px;background-color:red;color: white;cursor: pointer;" id="<?php echo $row['ID'].'them2'; ?>">ADD TO CART</div>
        </div>
        <script>
            document.getElementById("<?php echo $row['ID'].'them2'; ?>").addEventListener("click",function(){ themcart2('<?php echo $row['ID']; ?>') });
            document.getElementById("<?php echo $row['ID'].'hien'; ?>").addEventListener("click",function(){ hienchitiet('<?php echo $row['ID']; ?>') });
            function themcart2(a){
                $.ajax({
                    type:"POST",
                    url:'pages/themgiohang2.php',
                    data:  { ID : a },
                    success: function(){
                        alert("Thêm thành công");          
                    }
                });
            }
            function hienchitiet(){
                var ct='<img src="<?php echo $row['Hinh_ct']; ?>" style="width:400px;height:495px"></img>';
                document.getElementById("thongso").innerHTML=ct;
                document.getElementById("thongso").style.display='block';
                document.getElementById("ct").classList.add("dichuyen");
            }
            function out(){
                document.getElementById("ct").style.display='none';
                document.getElementById("thongso").style.display='none';
                document.getElementById("ct").classList.remove("dichuyen");
            }
        </script>
        <?php } ?>

