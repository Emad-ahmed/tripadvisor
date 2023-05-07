document.getElementById("fareprice").value= 0;
document.getElementById("totalprice").value= 0;
function DivisionList() { 
    var diviListfrom = document.getElementById('divsionfrom').value;
    var diviListto = document.getElementById('divsionto').value;


    if((diviListfrom == 'Dhaka' && diviListto == 'Sylhet') ||  (diviListfrom == 'Rangpur' && diviListto == 'Dhaka') || (diviListfrom == 'Sylhet' && diviListto == 'Dhaka') || (diviListfrom == 'Dhaka' && diviListto == 'Rangpur') || (diviListfrom == 'Mymensingh' && diviListto == 'Rangpur')){		
		var transportlist = '<option disabled selected>Select Transportation</option><option value="Bus">Bus</option><option value="Train">Train</option><option value="Airlines">Airlines</option>';
	} else if( (diviListfrom == 'Rangpur' && diviListto == 'Sylhet') || (diviListfrom == 'Sylhet' && diviListto == 'Rangpur') || (diviListfrom == 'Sylhet' && diviListto == 'Khulna') || (diviListfrom == 'Sylhet' && diviListto == 'Rangpur') || (diviListfrom == 'Rangpur' && diviListto == 'Khulna') || (diviListfrom == 'Khulna' && diviListto == 'Rangpur') || (diviListfrom == 'Khulna' && diviListto == 'Sylhet') || (diviListfrom == 'Chittagong' && diviListto == 'Sylhet') || (diviListfrom == 'Dhaka' && diviListto == 'Khulna') || (diviListfrom == 'Rangpur' && diviListto == 'Mymensingh'))
    {
        var transportlist = '<option disabled selected>Select Transportation</option><option value="Bus">Bus</option><option value="Train">Train</option><option value="Airlines">Airlines</option>';
    }

    document.getElementById("transportlist").innerHTML= transportlist;

}

function TransportationList()
{
    var transportlist = document.getElementById('transportlist').value;
    var diviListto = document.getElementById('divsionto').value;
   
    if(transportlist == "Train")
    {
        var paribhantlist = '<option disabled selected>Select Train</option><option value="Suborno Express">Suborno Express</option><option value="Mohanagar Provati/Godhuli Express">Mohanagar Provati/Godhuli Express</option><option value="Ekota Express">Ekota Express</option><option value="Tista Express">Tista Express</option><option value="Parabat Express">Parabat Express</option>';
    } else if(transportlist == "Bus")
    {
        var paribhantlist = '<option disabled selected>Select Bus</option><option value="Nabil Paribahan">Nabil Paribahan</option><option value="T.R Travels">T.R Travels</option><option value="Sony Paribahan">Sony Paribahan</option><option value="Shoukhin Paribahan">Shoukhin Paribahan</option><option value="Shohag Paribahan">Shohag Paribahan</option> <option value="Sky Line">Sky Line</option> <option value="Mohanogor">Mohanogor</option> <option value="Green Line Paribahan">Green Line Paribahan</option>';
    } else if(transportlist == "Train")
    {
        
    }
    document.getElementById("paribhantlist").innerHTML= paribhantlist;
}


function ParhibhanList()
{
    var transportlist = document.getElementById('transportlist').value;
    var diviListto = document.getElementById('divsionto').value;
    var paribhantlist = document.getElementById('paribhantlist').value;
  
    
}


function FarelistList()
{
    var transportlist = document.getElementById('transportlist').value;
    var diviListto = document.getElementById('divsionto').value;
    var paribhantlist = document.getElementById('paribhantlist').value;
    var farelist = document.getElementById('farelist').value;


    
    
}

function getValuePlus()
{
    var divsionfrom = document.getElementById('divsionfrom').value;
    var transportlist = document.getElementById('transportlist').value;
    var diviListto = document.getElementById('divsionto').value;
    var paribhantlist = document.getElementById('paribhantlist').value;
    var farelist = document.getElementById('farelist').value;
    var inputCalcBox = document.getElementById('inputCalcBox').value;
    
    var inputCalcBox = parseInt(inputCalcBox);


    
    if(inputCalcBox > 0)
    {
        if((transportlist == "Train" && divsionfrom == "Sylhet" && diviListto == "Dhaka"  && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way") || (transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet"  && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {
            fareprice = 900*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 900*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Sylhet" && diviListto == "Rangpur"  && paribhantlist == "Suborno Express" && farelist == "One way") || (transportlist == "Train" && divsionfrom == "Rangpur" && diviListto == "Sylhet"  && paribhantlist == "Suborno Express" && farelist == "One way"))
        {
            fareprice = 1100*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1100*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } 
    } else{
        document.getElementById("fareprice").value= 0;
        document.getElementById("totalprice").value= 0;
    }
  
    
    
}




