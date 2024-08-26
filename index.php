<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <title>Dhanifo Quick Links</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .rj-header{
            background-color: #fff;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.15);
            padding: 2px 25px;

            nav{
                display: flex;
                align-items:center;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 10px;


                div{
                    display: flex;
                    align-items: center;
                    gap: 3%;
                    flex-wrap: wrap;

                    .logo-link{
                        display: block;
        
                        .logo{
                            max-width: 182px;
                        }
                    }

                    .menu-item, #current-datetime, .ip-address{
                        color: rgb(33, 37, 41);
                        font: 700 16px/1.5 DM sans, sans-serif;
                        text-decoration: none;
                    }
                }
                div:first-child{
                    flex-wrap: nowrap;
                }
                div:last-child{
                    flex-grow: 1;
                    justify-content: end;
                }
                #current-datetime, .ip-address{
                    flex-shrink: 0;
                }
            }
        }

        .rj-main{
            margin-top: 3rem;
            flex-grow: 1;

            .custom-contianer{
                max-width: 80%;
                margin: 0 auto;
            }
            .supports-container{
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: clamp(10px, 3%, 40px);

                div{
                    border: 1px solid #efefef;
                    border-radius: 5px;
                    padding: 20px;

                    a{
                        display: flex;
                        align-items: center;
                        gap: 1.3em;
                        text-decoration: none;
                        color: rgb(33, 37, 41);

                        img{
                            max-width: 50px;
                        }

                        h3{
                            font: 600 14px/1.4 DM sans, sans-serif;
                            color: rgb(33, 37, 41);
                        }
                    }
                    
                }

            }
        }

        .help-desk-matrix-container{
            padding: 20px clamp(10px, 4%, 40px);
            border: 2px solid #efefef;
            display: grid;
            gap: 4%;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            margin-top: clamp(60px, 10vw, 160px);
            position: relative;
            font-family: DM sans, sans-serif;;
            
            >div{
                /* width: clamp(250px, 48%, 800px); */
                margin-block: clamp(10px, 4%, 40px);
                max-width: 85%;

                h3{
                    margin-top: 20px;
                }
                p{
                    font-size: 14px;
                    color: #000;
                    margin-top: 10px;
                }
                a{
                    color: #01abef;
                    text-decoration: none;
                    font-size: 14px;
                }
            }
            

            &::after{
                content: '';
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translateY(-50%);
                height: 80%;
                width: 2px;
                background-color: #efefef;
            }
            
            @media (max-width: 797px) {
                &::after{
                    /* width: 90%;
                    height: 2px;
                    transform: translateX(-50%); */
                    content: none;
                }
            }

        }

        footer{
            margin-top: auto;
            text-align: center;
            padding: 20px;

            p{
                font: 500 14px/1.5 DM sans, sans-serif;
            }
        }
    </style>
</head>
<body>
    <div style="display: flex; flex-direction: column; min-height: 100dvh;">
        <header class="rj-header">
            <nav>
                <div>
                    <a href="/moas" class="logo-link">
                        <img src="https://miniorange.s3.amazonaws.com/public/images/customer-logos/0346ae6183dfe249dbf56f1b5d0fcd3c-163331-logo.png" alt="Dhanifo Logo" title="Dhanifo Logo"  class="logo">
                    </a>

                    <a href="/moas/enduserwelcome" class="menu-item">Dashboard</a>
                </div>

                <div>
                    <p class="ip-address"> 
                        <?php 
                            $ip_address = $_SERVER['REMOTE_ADDR'];
                            echo "Local IP :" . $ip_address;
                        ?>
                    </p>
                    <span id="current-datetime"></span>
                </div>
            </nav>
        </header>

        <main class="rj-main">
            <div class="custom-contianer">

                <div class="supports-container">
                                    
                    <div>
                        <a href="http://192.168.17.241:8080/dhaninfo/" target="_blank">
                            <img src="http://192.168.17.100/portal/link/WFM.png" alt="">
                            <h3>WFM 241</h3>
                        </a>
                    </div>
                    <div>
                        <a href="http://192.168.17.242/dhaninfo/" target="_blank">
                            <img src="http://192.168.17.100/portal/link/WFM.png" alt="">
                            <h3>WFM 242</h3>
                        </a>
                    </div>

                    <div>
                        <a href="https://www.gmail.com" target="_blank">
                            <img src="http://192.168.17.100/portal/link/email.png" alt="">
                            <h3>Dhaninfo Email</h3>
                        </a>
                    </div>

                    <div>
                        <a href="http://192.168.17.100/kbs/wp-login.php" target="_blank">
                            <img src="http://192.168.17.100/portal/link/KB.png" alt="">
                            <h3>Knowledge Base</h3>
                        </a>
                    </div>

                    <div>
                        <a href="http://14.143.241.34:8899/qlita/welcome/index" target="_blank">
                            <img src="http://192.168.17.100/portal/link/Portal.png" alt="">
                            <h3>Portal</h3>
                        </a>
                    </div>

                    <div>
                        <a href="https://dhaninfo.freshdesk.com/support/tickets/new" target="_blank">
                            <img src="http://192.168.17.100/portal/link/help-desk.png" alt="">
                            <h3>Support</h3>
                        </a>
                    </div>
                    
                </div>  

                <div class="help-desk-matrix-container">
                    <div class="help-desk-matrix">
                        <h2>IT Support Escalation Matrix</h2>
                        <h3>Level 1: Help Desk/Service Desk</h3>
                        <p><strong>Responsibilities:</strong>  <a href="mailto:support@dhaninfo.biz">support@dhaninfo.biz</a> / Call Ext - 426 ( You must create ticket after resolution) </p>
                        <p>Receive and log initial incidents or service requests. </p>
                        <p>Perform basic troubleshooting (e.g., password resets, software installations). Resolve low-complexity issues.</p>
                            
                           <h3>Escalate unresolved issues to Level 2. </h3>
                           <a href="mailto:support_L2@dhaninfo.biz">support_L2@dhaninfo.biz</a>
                            <p>
                               <strong>Escalation Criteria: </strong> <a href="mailto:satish@dhaninfo.biz">satish@dhaninfo.biz</a> (Issues that cannot be resolved within a predefined time frame or are beyond basic troubleshooting capabilities )</p>
                            </p>
                    </div>
                    <div class="help-desk-matrix">
                        <h2>HR Matrix</h2>
                        <h3>Level 1: HR</h3>
                        <p><strong>Responsibilities Respective SPOC:</strong>  <a href="mailto:hrteam@dhaninfo.biz">hrteam@dhaninfo.biz</a> / Call Ext - 406/413/404 </p>
                        <p>For any queries related to HR (ex. Payroll, ratification, Biometric issue, Documents related, etc) </p>
                            
                           <h3>Escalate unresolved issues to Level 2</h3>
                           
                           <p><b>Level 2: Abhijeet Dhawale</b></p>
                            <p>
                               <strong>Escalation: </strong> <a href="mailto:abhijeet.dhawale@dhaninfo.biz">abhijeet.dhawale@dhaninfo.biz</a> (Issues that cannot be resolved within a predefined time frame)</p>
                            </p>
                    </div>
                </div>

            </div>
        </main>

        <footer>
            <p>Copyright © <span id="current-year"></span> DhanInfo. All rights reserved</p>
        </footer>
    </div>

<script>
    let date = new Date();
    document.getElementById('current-year').innerHTML = date.getFullYear(); 
      

    function formatDate() {
        const date = new Date();
        const day = date.getDate().toString().padStart(2, '0');
        const month = (date.getMonth() + 1).toString();
        const year = date.getFullYear();
        
        let hours = date.getHours();
        const minutes = date.getMinutes().toString().padStart(2, '0');
        const seconds = date.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'pm' : 'am';
        
        hours = hours % 12;
        hours = hours ? hours : 12;
        
        document.getElementById('current-datetime').innerHTML = `Time is ${day}/${month}/${year} - ${hours}:${minutes}:${seconds} ${ampm}`;
    }

    setInterval(formatDate, 1000);
    

    </script>
</body>
</html>