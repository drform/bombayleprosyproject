   
   function checkDate(thisform)
   {
        var staff = thisform.staffName.value;
        var date1  = thisform.formDate.value;
        var assesdate = thisform.assesdate.value;
        var nfaval = thisform.nfaval.value;
		
	   if(staff =="" || staff==null)
        {   alert("staff name is required");
            thisform.staff.focus;
            return false;
        }
        if(nfaval=="" || nfaval==null)
        {
            alert("NFA value is required")
            thisform.nfaval.focus;
            return false;
        }
        if(isNaN(nfaval))
        {
            alert("Invalid value enter a numbered value");
            thisform.nfaval.focus;
            return false;
        }
		
		
   /*     if(aday <= fday-1)
        {
            alert("enter a valid day");
            thisform.assesdate.focus;
            return false;
        }
        if(amonth <= fmonth-1)
        {

            alert("enter a valid month");
            thisform.assesdate.focus;
            return false;

        }
        if(ayear <= fyear-1)
        {

            alert("enter a valid year");
            thisform.assesdate.focus;
            return false;
        }  */
	    if(date1 >= assesdate)
		{
		   
			alert("error");
			return false;
			
		}	

       return true;
    }