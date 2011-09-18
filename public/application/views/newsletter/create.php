<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
   <title>Church In Toronto - Newsletter Signup</title>
   
</head>

<body>
   <h4>
      Enter your contact information to have the Church in Toronto newsletter sent to you. </h4></br>
    <?= form_open('newsletter');?>

 Name (optional): 
 <?php $data = array(
              'name'        => 'name',
              'id'          => 'name',
              'maxlength'   => '255',
              'size'        => '50',
              'value'       => set_value('name'),
              
            );

 echo form_input($data); ?><br /><br />
 
  Email: 
 <?php $data = array(
              'name'        => 'email',
              'id'          => 'email',
              'maxlength'   => '255',
              'size'        => '50',
              'value'       => set_value('email'),
            );

 echo form_input($data); ?><br /><br />
 
 <br /><br />

 <input type="submit" name="submit" value="Submit" />

</form>

</body>

</html>