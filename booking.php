<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <div id="container" style="position: relative;" >
        
            <div id='confirmDisplay' >
                <h3 id='roomselect'></h1>
                <button onclick="confirmClick()">จอง</button>
                <button onclick="closeClick()">ยกเลิก</button>
            </div>
            <div style="width: 75%; position: absolute"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 613.08 277.26" >
                    <defs>
                        <style>
                            .cls-1{fill: #00ff00;}
                        </style>
                    </defs>
                    <g id="lecture704" onclick="handleOnClick('lecture704')" class="cls-1">
                        <path d="M565.25,274c-14.33,0-28.66,0-43,.05-1.86,0-2.3-.43-2.3-2.3q.1-40.75,0-81.5c0-1.86.43-2.3,2.3-2.3q43,.11,86,0c1.86,0,2.3.43,2.3,2.3q-.1,40.75,0,81.5c0,1.86-.43,2.31-2.3,2.3C593.92,274,579.58,274,565.25,274Z" transform="translate(-0.47 -0.46)"/>
                        <text x='535' y='225' fill='black'>lecture704</text>
                    </g>
                    <g id="lecture703" onclick="handleOnClick('lecture703')" class="cls-1">
                        <path d="M466.25,188c16.33,0,32.66,0,49-.05,1.87,0,2.31.43,2.31,2.3q-.1,40.75,0,81.49c0,1.87-.43,2.31-2.3,2.31q-49-.1-98,0c-1.87,0-2.31-.43-2.31-2.3q.1-40.75,0-81.49c0-1.87.43-2.32,2.3-2.31C433.58,188,449.92,188,466.25,188Z" transform="translate(-0.47 -0.46)"/>
                        <text x='435' y='225' fill='black'>lecture703</text>
                    </g>
                    <g id="lab701-lab702" onclick="handleOnClick('lab701-lab702')" class="cls-1">
                        <path d="M365.25,274c-15,0-30,0-45,.05-1.87,0-2.31-.43-2.31-2.3q.1-40.75,0-81.5c0-1.86.43-2.3,2.3-2.3q45,.11,90,0c1.86,0,2.3.43,2.3,2.3q-.1,40.75,0,81.5c0,1.86-.43,2.31-2.3,2.3C395.25,274,380.25,274,365.25,274Z" transform="translate(-0.47 -0.46)"/>
                        <text x='340' y='215' fill='black'>lab701</text>
                        <text x='340' y='230' fill='black'>lab702</text>
                    </g>
                    <g id="lab708" onclick="handleOnClick('lab708')" class="cls-1">
                        <path d="M540.5,3.5c22.5,0,45,0,67.5,0,2.07,0,2.56.47,2.55,2.55q-.1,48.5,0,97c0,2.07-.48,2.55-2.55,2.55q-67.5-.1-135,0c-2.07,0-2.56-.47-2.55-2.55q.1-48.49,0-97c0-2.07.48-2.56,2.55-2.55C495.5,3.53,518,3.5,540.5,3.5Z" transform="translate(-0.47 -0.46)"/>
                        <text x='500' y='60' fill='black'>lecture708</text>

                    </g>
                    <g id="lecture709" onclick="handleOnClick('lecture709')" class="cls-1">
                        <path d="M392,105.5c-24.5,0-49,0-73.5,0-2.07,0-2.56-.47-2.55-2.55q.1-48.49,0-97c0-2.08.48-2.55,2.55-2.55q73.5.09,147,0c2.07,0,2.56.47,2.55,2.55q-.1,48.5,0,97c0,2.08-.48,2.56-2.55,2.55C441,105.47,416.5,105.5,392,105.5Z" transform="translate(-0.47 -0.46)"/>
                        <text x='360' y='60' fill='black'>lecture709</text>
                    </g>
                    <g id="lecture710" onclick="handleOnClick('lecture710')" class="cls-1"> 
                        <path  d="M129,3.5q61.62,0,123.25,0c2.26,0,2.81.54,2.8,2.8q-.12,48.14,0,96.25c0,2.08-.48,2.55-2.56,2.55q-123.49-.09-247,0c-2.07,0-2.56-.48-2.55-2.55Q3.06,54.25,3,6c0-2.08.48-2.56,2.56-2.55Q67.25,3.56,129,3.5Z" transform="translate(-0.47 -0.46)"/>
                        <text x='60' y='60' fill='black'>lecture710</text>
                    </g>
                </svg>
            </div>
        </div>
        <script>
            function handleOnClick(room) {
                if (document.getElementById(room).style.fill != 'red'){
                    document.getElementById('roomselect').innerHTML = room
                    document.getElementById("confirmDisplay").style.display = "block";
                }else {
                    alert('ห้อง'+ room +"ถูกจองแล้ว")
                }
            }
            function closeClick() {                
                document.getElementById('confirmDisplay').style.display = "none";
            }
            function confirmClick(){
                let roomselect = document.getElementById('roomselect').innerHTML;
                document.getElementById(roomselect).style.fill = 'red';
                document.getElementById('confirmDisplay').style.display = "none";
            }
            document.getElementById('confirmDisplay').style.display = "none";
        </script>
    </body>
    </html>