<div>
<head>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@400;500&display=swap');




  
  

.container{
    max-width:1200px;
    margin:auto;
    padding: 1rem;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap: 10rem;
    height:100vh;
    background-color:white;
    color:#bb95dc;
    font-size:16px;
    background:url('https://c8.alamy.com/comp/EGKMDR/purple-paint-splatter-EGKMDR.jpg')

}

.container-left h1{
    margin-bottom: 2rem;
    font-size: 34px;
    font-weight:800;
}

.container-left p{
    margin-bottom: 1rem;
}




.container-right{
    display:grid;
    
}

.card{
    padding:3px;
    display:flex;
    align-items:flex-start;
    gap:2rem;
    background-color:white;
    border-radius:1rem;
    box-shadow:3px 3px 15px #bb95dc;
    cursor:pointer;
    margin:15px;
}

.card img{
    max-width:75px;
    border-radius:100%;
   
}

.card_content{
    display:flex;
    gap:1rem;
}

.card_content span i{
    font-size: 16px;
}

.card_details p{
    text-align:left;
    font-size:15x;
    font-weight:500;
}

.card_details h4{
    color:black;
    text-align:right;
    margin-right:20px;
    font-size:18px;
    font-weight:700;
    
}

@media(width <1200px){
    .container{
        gap:3rem;
    }

    .form-body{
        margin-top: 120px;
    }
}

@media(max-width:900px){
    .container{
        grid-template-columns: repeat(1,1fr);
    }
    .contaier-right{
        grid-template-columns:repeat(1,1fr);
    }

    .form-body {
        margin-top: 300px;
      }
      .user-details{
        justify-content: flex-start;
      }
}

@media (width<750px){
    
    
    .container-right{
        grid-template-columns:repeat(1,1fr);
        
    }

    .form-body {
        margin-top: 390px;
        
      }
      
    .user-details{
      justify-content: flex-start;
      margin-left: 10px;
    }
}


  

  

a {
    text-decoration:none;
    color:black;
}



.main-button{
    padding: 9px 25px;
    background-color:#bb95dc;
    border-radius: 5px;
    cursor:pointer;
    transition: all 0.3s ease 0s;
    margin-top: 1rem;
    font-size:15px;
    font-weight:300;
    
    
}
.main-button:hover{

    background-color:#bb95dccc;
}

/*  form  */
.form-body{
    display:grid;
    height:100vh;
    padding:10px;
    align-items:center;
    justify-content:center;
    position:relative;
    
    
    
    
}

.form-button{
    padding: 15px 25px;
    background-color:#bb95dc;
    border-radius: 10px;
    cursor:pointer;
    transition: all 0.3s ease 0s;
    font-size:15px;
    font-weight:300;
    height:100%;
    width:20%;
    margin-left:680px;
    margin-top:20px;
    
}

.form-button:hover{
    background-color:#bb95dccc;
    border:none;
    

}

.form-container{
    max-width:700px;
    width:100%;
    background:#bb95dc33;
    padding:25px 30px;
    border-radius:5px;
}

.title{
    font-size:25px;
    font-weight:800;
    position:relative;
}

.title::before{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    margin-top:10px;
    height:3px;
    width:150px;

}

.user-details{
    display:flex;
    flex-wrap:wrap;
    justify-content: space-between;
    margin:20px 0 12px 0;
}


form .user-details .input-box{
    width:380px;
    margin-bottom:5px;
    

    
}

.user-details .input-box input{
    height:45px;
    width:100%;
    outline:none;
    border-radius:5px;
    border:1px solid #ccc;
    padding-left:15px;
    font-size:16px;
    border-bottom-width:2px;
    transition: all 0.3s ease;
}

.user-details .input-box textarea{
    width:100%;
    height:100px;
    outline:none;
    border-radius:5px;
    border:1px solid #ccc;
    padding-left:15px;
    font-size:16px;
    border-bottom-width:2px;
    transition: all 0.3s ease;
}

    


.user-details .input-box .details{
    font-weight:700;
    margin-bottom:5px;
    display:block;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color:black;
}

.user-details .input-box textarea:focus,
.user-details .input-box textarea:valid{
    border-color:black;
}

@media (max-width:584px){
    .form-container{
        max-width:100%;
    }
    form .user-details .input-box{
        margin-bottom:15px;
        width:100%;
    }
    
}
    </style>
    <title>Customer Review Page</title>
</head>
<div>
    <div >
        <div class="container top" id="container" style=''>
            <div class="container-left">
                <h1>What Our Patients Say</h1>
                <p style='line-height:30px;font-size:18px;'>
                    Our clinic always try to provide preventive, diagnostic, and treatment services for various health condition. We also make an effort to assit individuals to maintain a good health by addressing a wide range of needs and necessaricity.
                </p>
                <p>
                    Your feedback is a gift. We appreciate you taking the time to share your thoughts with us to enhance our services.
                </p>
                <button class="main-button"><a href="#form-body"><i class="fa-regular fa-pen-to-square"></i> Write Review</a></button>
            </div>

            
        
        <div class="container-right">
            <div class="card">
                <img src="customer1.jpg" alt="user1">
                <div class="card_content">
                    <span><i class="ri-double-quotes-l"></i></span>
                    <div class="card_details">
                        
                        <p>
                            လူနာတွေအပေါ်လည်းနွေးထွေးမှုရှိပြီး ဝန်ဆောင်မှုအရမ်းကောင်းတဲ့ဆေးခန်းပါ။ 100% recommend ပေးပါတယ်။
                        </p>
                        <h4>-Aung Aung</h4>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <img src="customer2.jpg" alt="user2">
                <div class="card_content">
                    <span><i class="ri-double-quotes-l"></i></span>
                    <div class="card_details">
                        <p>
                            အဆင့်မြင့်တဲ့စက်တွေနဲ့ ကျွမ်းကျင်တဲ့ဆရာဝန်တွေနဲ့သေချာတိုင်ပင်ပြီးမှ treatment လုပ်လို့ရတာမို့ စိတ်ချရတဲ့ဆေးခန်းပါ။
                        </p>
                        <h4>-Yi Yi</h4>
                        </div>
                        
                    
                </div>
            </div>
            <div class="card">
                <img src="customer3.jpg" alt="user3">
                <div class="card_content">
                    <span><i class="ri-double-quotes-l"></i></span>
                    <div class="card_details">
                        <p>
                            အားလုံးအဆင်ပြေပြေချောချောမွေ့မွေ့ဖြစ်အောင် ကူညီပေးတဲ့ ဆရာ ဆရာမတွေ အကုန်လုံးကိုကျေးဇူးတင်ပါတယ်။</i>

                        </p>
                
                        <h4>-Hnin234</h4>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="form-body" id="form-body" style='color:black'>
            <div class="form-container">
                <div class="title">Feedback<i class="fa-regular fa-comment"></i>
                </div>
        <form>
            <div class="user-details d-flex align-items-center justify-content-center">
                <div class="input-box mt-3">
                    <span class="details"><i class="fa-regular fa-calendar-days"></i> Name : </span>
                    <input type = "text" name="datetime" placeholder="Enter date and time" required>
                </div>
                <div class="input-box mt-3">
                    <span class="details"><i class="fa-solid fa-user"></i> Email :</span>
                    <input type = "text" name="name" placeholder="Enter full name" required>
                </div>
                
                <div class="input-box mt-3">
                    <span class="details"><i class="fa-regular fa-comments"></i> Complaint, comment or suggestion :</span>
                     <textarea name="feedback" rows="10" cols="50" placeholder="Enter your feedback" required></textarea>

                </div>

            
                <div>
                <button class="input-box btn text-white main-button"><i class="fa-regular fa-paper-plane"></i> Submit</button>
                </div>
            </div>
            
        </form>
        </div>
        </div>
    
    </div>
</div>
</div>