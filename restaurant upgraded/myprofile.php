 <!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>
 <style>
  .res
{

  height: 550px;
  font-size: 20px; 
  font-family: Ink Free;
    }

  .phone input
  {
    background-color: transparent;
    box-shadow: 0px 0px 5px white;
    transition: 2s;
    font-size: 20px;
  }
  .pincode input
  {
    background-color: transparent;
    box-shadow: 0px 0px 5px white;
    transition: 2s;
    font-size: 20px;
  }
  
  .address input
  {
    background-color: transparent;
    box-shadow: 0px 0px 5px white;
    transition: 2s;
    font-size: 20px;
  }
  .city input
  {
    background-color: transparent;
    box-shadow: 0px 0px 5px white;
    transition: 2s;
    font-size: 20px;
  }
  .state input
  {
    background-color: transparent;
    box-shadow: 0px 0px 5px white;
    transition: 2s;
    font-size: 20px;
  }

 </style>
 <body>

  <div class=" col-lg-offset-4 col-lg-4 res">

    <div class=" text-center">
                <h1> Reservation</h1>
                <h2 >Book Your Table</h2>
              </div>
    
     <div class="form-group">
                  <h1><label for="address">Address:</label>
                  <input class="input" type="text"  id="address"></h1>
    </div> 
      <div class="form-group">
                  <h1><label for="state">State:</label>
                  <input class="input" type="text"  id="state"></h1>
    </div>    
    <div class="form-group">
                  <h1><label for="city">City:</label>
                  <input class="input" type="text"  id="city"></h1>
    </div>           

                <div class="form-group">
                  <h1><label for="phone">Contact:</label>
                  <input class="input" type="tel"  id="phone">
                </div></h1>
                <div class="form-group">
                  <h1><label for="pincode">Pincode:</label>
                  <input class="input" type="tel"  id="pincode">
                </div></h1>
               
          
                <div class="text-center">
                <button class="main-button">Book Now</button>
              </div>


     </div>
                </form>
  </body>
  </html>