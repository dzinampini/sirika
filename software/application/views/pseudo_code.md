vehicle tracking device
device visits https://sirika.mupini.co.zw/track-vehicle.php with the following data every 1s
  record_time
  latitude
  longitude
  mass
  speed
  on_off_status
  idling
  battery
record the data as a new row in a tracking data table 
alert any set abnormalities 

fare collection device 
passenger taps a card 
get the identity of the passenger from the card id 
detect whether passenger is dropping off or getting in to a bus 
if getting into bus
  record location 
  deduct an amount set as the minimum to deduct
if dropping off
  record location
  retrieve getting into bus location  
  find difference in distance between the two locations 
  multiply the cost_per_km and the distance to get the actual amount to be deducted 
  update the amount to be deducted 

web application login 
visit sirika.mupini.co.zw
if not logged in 
  redirect user to the login page 
  allow user to enter email and password 
  if either of the two or both the records are wrong 
    alert user 
    redirect to login page 
  if true 
    redirect user to admin panel 


register new company 
  to be done by admin
  register company details 

register new user 
  confirm if max number of users has not yet been reached 
  if reached 
    alert user 
  else 
    allow entereing staff details 
    confirm they meet the set validations 
    register 


  

