     function copy()
        {
        if(chek.checked==true)
            {
         document.getElementById('address2').value= document.getElementById('address1').value; document.getElementById('union2').value= document.getElementById('union1').value;
         document.getElementById('dist2').value= document.getElementById('dist1').value;
         document.getElementById('taluk2').value= document.getElementById('taluk1').value;
         document.getElementById('city2').value= document.getElementById('city1').value;
         document.getElementById('pin2').value= document.getElementById('pin1').value;
            }else{
           document.getElementById('address2').value='';
                document.getElementById('union2').value='';
                document.getElementById('dist2').value='';
                document.getElementById('taluk2').value='';
                 document.getElementById('city2').value=''; 
                document.getElementById('pin2').value='';
            }
    }
    

                
         
    
    
    
        