var account = {
  Title: "Arslan imtiaz",
  Available_Balance:"2345678953",
  Currency: "PKRS",
  IBAN: "PKNL1F16BSCS0504"
};
document.getElementById("title").innerHTML = account.Title;
document.getElementById("balance").innerHTML = account.Available_Balance;
document.getElementById("currency").innerHTML = account.Currency;
document.getElementById("IBAN").innerHTML = account.IBAN;
function deposit(e)
{
      if(e.keyCode =='13')
	  {
		var dep = document.getElementById("deposit").value;
		
	  }
}