function verif_form()
      {
        var nom, prenom, mail, sport;
        nom =  document.getElementById("nom").value;
        prenom =  document.getElementById("prenom").value;
        mail =  document.getElementById("mail").value;
        sport =  document.getElementById("sport").value;
        if(nom != '' && prenom != '' && mail != '' && sport != 'Sport préféré')
        {
          var arobase=0, point=0;
          for(i=0;i<mail.length;i++)
          {
            if(mail[i]=="@")
            {
              arobase++;
            }
            else if(mail[i]==".")
            {
              point++;
            }
          }
          if(arobase==1 && point>=1)
          {
            alert("Informations personnelles enregistrées !");
            document.location.href="./Enquete2.html";
          }
          else
          {
            alert("mail incorrect");
          } 
        }
        else
        {
          alert("Veuillez remplir tous les champs !");
        }
      }

// --------------------------------------------------------------------

function verif_check()
{
  
}