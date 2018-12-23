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
  var MaxChoice = 4, MaxChoice2 = 2, checkreponseQ4=0, checkreponseQ5=0;
  for (i=1; i<MaxChoice+1; i++)
  {
 	  if (document.getElementById('reponseQ4_'+i).checked)
	  {
      checkreponseQ4++;
    }
  }
  for (i=1; i<MaxChoice2+1; i++)
  {
    if (document.getElementById('reponseQ5_'+i).checked)
    {
      checkreponseQ5++;
    }
  }
  if(checkreponseQ4!=0 && checkreponseQ5!=0)
  {
    alert("Réponses enregistrées !");
    document.location.href="./Enquete4.html";
  }
  else
  {
    alert("Veuillez sélectionner une réponse !");
  }
}

// --------------------------------------------------------------------

function verif_radio()
{
  var MaxChoice = 4, MaxChoice2 = 2, MaxChoice3 = 3, checkreponseQ1 = 0, 
  checkreponseQ2 = 0, checkreponseQ3_1 = 0, checkreponseQ3_2 = 0, checkreponseQ3_3 = 0,
  checkreponseQ3_4 = 0, checkreponseQ3_5 = 0, checkreponseQ3_6 = 0;
  for (i=1; i<MaxChoice+1; i++)
  {
 	  if (document.getElementById('reponseQ1_'+i).checked)
	  {
      checkreponseQ1++;
    }
  }
  for (i=1; i<MaxChoice2+1; i++)
  {
    if (document.getElementById('reponseQ2_'+i).checked)
    {
      checkreponseQ2++;
    }
  }
  for (i=1; i<MaxChoice3+1; i++)
  {
    if (document.getElementById('reponseQ3_1_'+i).checked)
    {
      checkreponseQ3_1++;
    }
    if (document.getElementById('reponseQ3_2_'+i).checked)
    {
      checkreponseQ3_2++;
    }
    if (document.getElementById('reponseQ3_3_'+i).checked)
    {
      checkreponseQ3_3++;
    }
    if (document.getElementById('reponseQ3_4_'+i).checked)
    {
      checkreponseQ3_4++;
    }
    if (document.getElementById('reponseQ3_5_'+i).checked)
    {
      checkreponseQ3_5++;
    }
    if (document.getElementById('reponseQ3_6_'+i).checked)
    {
      checkreponseQ3_6++;
    }
  }
  
  if(checkreponseQ1!=0 && checkreponseQ2!=0 && checkreponseQ3_1!=0 && 
    checkreponseQ3_2!=0 && checkreponseQ3_3!=0 && checkreponseQ3_4!=0
    && checkreponseQ3_5!=0 && checkreponseQ3_6!=0)
  {
    alert("Réponses enregistrées !");
    document.location.href="./Enquete3.html";
  }
  else
  {
    alert("Veuillez sélectionner une réponse !");
  }
}

