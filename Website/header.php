
<style>
    .header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        
        .outerHeader,
        .innerHeader {
            width: 100%;
        }
        
        .brand {
            font-size: 24px;
        }
        
        .loginButton {
            margin: auto;
            padding: 10px 20px;
            color: white;
            background-color: orangered;
            text-transform: capitalize;
            border-radius: 30px;
        }
        
        .headerListItems li {
            float: left;
            padding: 7px 10px;
            cursor: pointer;
            text-transform: capitalize;
        }
        
        .headerListItems li.activeListItem {
            color: white;
            padding: 7px 15px;
            background-color: green;
            border-radius: 20px;
        }
</style>
    <div class="container-fluid header">
        <div class="outerHeader">
            <div class="leftDiv">
                <span class="brand">
                    BookBud
               </span>
            </div>
            <div class="rightDiv">
                <span class="loginButton">login/signup</span>
            </div>
        </div>
    </div>

    <div class="container-fluid header hide">
        <div class="innerHeader">
            <div class="leftDiv">
                <span class="brand">
                    BookBud
                </span>
            </div>
            <div class="rightDiv">
                <ul class="headerListItems">
                    <li class="activeListItem">home</li>
                    <li>profile</li>
                    <li>orders</li>
                    <li>logout</li>
                </ul>
            </div>
        </div>
    </div>