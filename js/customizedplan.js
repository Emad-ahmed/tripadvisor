document.getElementById("fareprice").value= 0;
document.getElementById("totalprice").value= 0;

const selectElement = document.getElementById('placelist');
const selectedOptions = [];

selectElement.addEventListener('change', function() {
  selectedOptions.length = 0; // Clear the array

  Array.from(this.selectedOptions).forEach(option => {
    selectedOptions.push(option.value);
  });

  
});







function DivisionList() { 
    
    var diviListto = document.getElementById('divsionto').value;
    
    
    if(diviListto == 'Barishal')
    {
        var hotellist = '<option disabled selected>Select Hotel</option><option value="Hotel Grand Park">Hotel Grand Park</option><option value="Hotel Athena">Hotel Athena</option><option value="Hotel Ali International">Hotel Ali International</option><option value="Hotel Sedona International">Hotel Sedona International</option>';
    } else if(diviListto == 'Sylhet')
    {
        var hotellist = '<option disabled selected>Select Hotel</option><option value="Hotel Noorjahan Grand">Hotel Noorjahan Grand</option><option value="Hotel Mira Garden">Hotel Mira Garden</option><option value="Hotel Grand View 1 & 2">Hotel Grand View 1 & 2</option><option value="Bottomhill Palace Hotel">Bottomhill Palace Hotel</option><option value="Nirvana Inn">Nirvana Inn</option>';
    } else if(diviListto == 'Rangpur')
    {
        var hotellist = '<option disabled selected>Select Hotel</option><option value="Grand Palace Hotel & Resorts Rangpur">Grand Palace Hotel & Resorts Rangpur</option><option value="RDRS Guest House">RDRS Guest House</option><option value="Hotel North View">Hotel North View</option><option value="Caspia Home">Caspia Home</option><option value="Little Rangpur Inn">Little Rangpur Inn</option>';
    }

    document.getElementById("hotellist").innerHTML= hotellist;



    if(diviListto == 'Rangpur'){		
        var placelistview = '<option value="Tajhat Palace">Tajhat Palace</option><option value="Town Hall">Town Hall</option><option value="Mithapukur Bara Mosque">Mithapukur Bara Mosque</option><option value="Begum Rokeya Memorial Centre">Begum Rokeya Memorial Centre</option><option value="Kellaband Mosque (Masjid)">Kellaband Mosque (Masjid)</option>';

	} else if(diviListto == 'Barishal'){
        var placelistview = '<option value="Barisal Divisional Museum">Barisal Divisional Museum</option><option value="Durga Sagar">Durga Sagar</option><option value="Bibi\'r Pukur">Bibi\'r Pukur</option><option value="Koloshkathi Zamindar Bari">Koloshkathi Zamindar Bari</option><option value="Oxford Mission Church">Oxford Mission Church</option><option value="Guthia Baitul Aman Jame Masjid Complex">Guthia Baitul Aman Jame Masjid Complex</option><option value="Lakutia Zamindar Bari">Lakutia Zamindar Bari</option>';

    } else if(diviListto == 'Sylhet')
    {
        var placelistview = '<option value="Ratargul Swamp Forest">Ratargul Swamp Forest</option><option value="Khadimnagar National Park">Khadimnagar National Park.</option><option value="Bisnakandi Nature">Bisnakandi Nature</option><option value="Pangthumai Waterfall">Pangthumai Waterfall</option><option value="Shahjalal Dorgha">Shahjalal Dorgha</option><option value="Satchari National Park">Satchari National Park</option>';

    }

    document.getElementById("placelist").innerHTML= placelistview;

}

function Placelist() { 
    var diviListfrom = document.getElementById('divsionfrom').value;
    var diviListto = document.getElementById('divsionto').value;
    var placelist = document.getElementById('placelist');

  
    

   
    if((diviListfrom == 'Dhaka' && diviListto == 'Sylhet') ||  (diviListfrom == 'Rangpur' && diviListto == 'Dhaka') || (diviListfrom == 'Sylhet' && diviListto == 'Dhaka') || (diviListfrom == 'Dhaka' && diviListto == 'Rangpur') || (diviListfrom == 'Mymensingh' && diviListto == 'Dhaka')){		
		var transportlist = '<option disabled selected>Select Transportation</option><option value="Bus">Bus</option><option value="Train">Train</option><option value="Airlines">Airlines</option>';
	} else if( (diviListfrom == 'Rangpur' && diviListto == 'Sylhet') || (diviListfrom == 'Sylhet' && diviListto == 'Rangpur') || (diviListfrom == 'Sylhet' && diviListto == 'Khulna') || (diviListfrom == 'Sylhet' && diviListto == 'Rangpur') || (diviListfrom == 'Rangpur' && diviListto == 'Khulna') || (diviListfrom == 'Khulna' && diviListto == 'Rangpur') || (diviListfrom == 'Khulna' && diviListto == 'Sylhet') || (diviListfrom == 'Chittagong' && diviListto == 'Sylhet') || (diviListfrom == 'Dhaka' && diviListto == 'Khulna') || (diviListfrom == 'Rangpur' && diviListto == 'Mymensingh'))
    {
        var transportlist = '<option disabled selected>Select Transportation</option><option value="Bus">Bus</option><option value="Train">Train</option>';
    } else if( (diviListfrom == 'Barishal' && diviListto == 'Sylhet') || (diviListfrom == 'Barishal' && diviListto == 'Sylhet') || (diviListfrom == 'Sylhet' && diviListto == 'Barishal') || (diviListfrom == 'Barishal' && diviListto == 'Rangpur') || (diviListfrom == 'Rangpur' && diviListto == 'Barishal') || (diviListfrom == 'Dhaka' && diviListto == 'Barishal') || (diviListfrom == 'Barishal' && diviListto == 'Chittagong') || (diviListfrom == 'Chittagong' && diviListto == 'Barishal') || (diviListfrom == 'Barishal' && diviListto == 'Dhaka') || (diviListfrom == 'Barishal' && diviListto == 'Mymensingh'))
    {
        var transportlist = '<option disabled selected>Select Transportation</option><option value="Train">Train</option><option value="Launch">Launch</option>';
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
    } else if(transportlist == "Airlines")
    {
        var paribhantlist = '<option disabled selected>Select Airlines</option><option value="Biman Bangladesh Airlines">Biman Bangladesh Airlines</option><option value="Bismillah Airlines">Bismillah Airlines</option><option value="US-Bangla Airlines">US-Bangla Airlines</option><option value="Novoair">Novoair</option><option value="Air Astra">Air Astra</option>';

    }
    else if(transportlist == "Launch")
    {
        var paribhantlist = '<option disabled selected>Select Launch</option><option value="MV KIRTONKHOLA  10">MV KIRTONKHOLA – 10</option><option value="MV SUNDARBAN – 10">MV SUNDARBAN – 10</option><option value="MV HAMZA AND MV RUSTAM">MV HAMZA AND MV RUSTAM</option><option value="PS OSTRICH">PS OSTRICH</option><option value="MV BAY ONE">MV BAY ONE</option>';

    }
    document.getElementById("paribhantlist").innerHTML= paribhantlist;
}


function ParhibhanList()
{
    var transportlist = document.getElementById('transportlist').value;
    var diviListto = document.getElementById('divsionto').value;
    var paribhantlist = document.getElementById('paribhantlist').value;
  
    
}








function getValuePlus()
{
    var divsionfrom = document.getElementById('divsionfrom').value;
    var transportlist = document.getElementById('transportlist').value;
    var diviListto = document.getElementById('divsionto').value;
    var paribhantlist = document.getElementById('paribhantlist').value;
    var farelist = document.getElementById('farelist').value;

    var inputCalcBox = document.getElementById('inputCalcBox').value;
    var placelist = document.getElementById('placelist');
    var hotellist = document.getElementById('hotellist').value;
    
    var inputCalcBox = parseInt(inputCalcBox);
    console.log(selectedOptions);
    
    
    if(inputCalcBox > 0)
    {
        //   SYlhet
        if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && selectedOptions[5] == "Satchari National Park"  && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {   
            fareprice = 4000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 4000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {   
            fareprice = 3500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 3500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {   
            fareprice = 3000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 3000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature"  && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {   
            fareprice = 2500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park"   && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {   
            fareprice = 2000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest"   && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Mohanagar Provati/Godhuli Express" && farelist == "One way"))
        {   
            fareprice = 1500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } 
        // Bus Start Sylhet
        else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && selectedOptions[5] == "Satchari National Park"  && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Nabil Paribahan" && farelist == "One way"))
        {   
            fareprice = 5000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 4000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Nabil Paribahan" && farelist == "One way"))
        {   
            fareprice = 4500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 3500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Nabil Paribahan" && farelist == "One way"))
        {   
            fareprice = 4000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 3000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature"  && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Nabil Paribahan" && farelist == "One way"))
        {   
            fareprice = 3500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park"   && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Nabil Paribahan" && farelist == "One way"))
        {   
            fareprice = 2000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest"   && hotellist == "Hotel Noorjahan Grand" && paribhantlist == "Nabil Paribahan" && farelist == "One way"))
        {   
            fareprice = 1500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } 
        
        // Transport Misses Sylhet
        
        else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && selectedOptions[5] == "Satchari National Park"  && hotellist == "Hotel Noorjahan Grand"  && farelist == "One way"))
        {   
            fareprice = 5000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 5000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && hotellist == "Hotel Noorjahan Grand"  && farelist == "One way"))
        {   
            fareprice = 4500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 4500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && hotellist == "Hotel Noorjahan Grand"  && farelist == "One way"))
        {   
            fareprice = 4000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 4000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature"  && hotellist == "Hotel Noorjahan Grand"  && farelist == "One way"))
        {   
            fareprice = 3500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 3500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park"   && hotellist == "Hotel Noorjahan Grand" && farelist == "One way"))
        {   
            fareprice = 2000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest"   && hotellist == "Hotel Noorjahan Grand"  && farelist == "One way"))
        {   
            fareprice = 1500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } 
        
        // Hotel Misses With Bus
        else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && selectedOptions[5] == "Satchari National Park"    && farelist == "One way"))
        {   
            fareprice = 3000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 3000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha"   && farelist == "One way"))
        {   
            fareprice = 2500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall"   && farelist == "One way"))
        {   
            fareprice = 2000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature"    && farelist == "One way"))
        {   
            fareprice = 1500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park"  && farelist == "One way"))
        {   
            fareprice = 1000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Bus" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && farelist == "One way"))
        {   
            fareprice = 800*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 800*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } 
        // Hotel Misses With Train
        else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && selectedOptions[5] == "Satchari National Park"    && farelist == "One way"))
        {   
            fareprice = 2700*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2700*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha"   && farelist == "One way"))
        {   
            fareprice = 2500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall"   && farelist == "One way"))
        {   
            fareprice = 2200*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2200*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature"    && farelist == "One way"))
        {   
            fareprice = 2000*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 2000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park"  && farelist == "One way"))
        {   
            fareprice = 1800*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1800*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && farelist == "One way"))
        {   
            fareprice = 1500*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1500*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } 
        
    // Hotel and Tranpost both miss

    else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha" && selectedOptions[5] == "Satchari National Park"    && farelist == "One way"))
    {   
        fareprice = 1500*inputCalcBox;
        document.getElementById("fareprice").value= fareprice;
        totalprice = 1500*inputCalcBox;
        document.getElementById("totalprice").value= totalprice;
        console.log(totalprice);
    } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall" && selectedOptions[4] == "Shahjalal Dorgha"   && farelist == "One way"))
    {   
        fareprice = 1300*inputCalcBox;
        document.getElementById("fareprice").value= fareprice;
        totalprice = 1300*inputCalcBox;
        document.getElementById("totalprice").value= totalprice;
        console.log(totalprice);
    } else if((diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature" && selectedOptions[3] == "Pangthumai Waterfall"   && farelist == "One way"))
    {   
        fareprice = 1200*inputCalcBox;
        document.getElementById("fareprice").value= fareprice;
        totalprice = 1200*inputCalcBox;
        document.getElementById("totalprice").value= totalprice;
        console.log(totalprice);
    } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park" && selectedOptions[2] == "Bisnakandi Nature"  && farelist == "One way"))
    {   
        fareprice = 1100*inputCalcBox;
        document.getElementById("fareprice").value= fareprice;
        totalprice = 1100*inputCalcBox;
        document.getElementById("totalprice").value= totalprice;
        console.log(totalprice);
    } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && selectedOptions[1] == "Khadimnagar National Park"  && farelist == "One way"))
    {   
        fareprice = 900*inputCalcBox;
        document.getElementById("fareprice").value= fareprice;
        totalprice = 900*inputCalcBox;
        document.getElementById("totalprice").value= totalprice;
        console.log(totalprice);
    } else if((divsionfrom == "Dhaka" && diviListto == "Sylhet" && selectedOptions[0] =="Ratargul Swamp Forest" && farelist == "One way"))
    {   
        fareprice = 700*inputCalcBox;
        document.getElementById("fareprice").value= fareprice;
        totalprice = 700*inputCalcBox;
        document.getElementById("totalprice").value= totalprice;
        console.log(totalprice);
    } 
    





        else if((transportlist == "Train" && divsionfrom == "Sylhet" && diviListto == "Dhaka"  && paribhantlist == "Suborno Express" && farelist == "One way") || (transportlist == "Train" && divsionfrom == "Dhaka" && diviListto == "Sylhet"  && paribhantlist == "Suborno Express" && farelist == "One way"))
        {
            fareprice = 1100*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1000*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        } else if((transportlist == "Train" && divsionfrom == "Sylhet" && diviListto == "Rangpur"  && paribhantlist == "Ekota Express" && farelist == "One way") || (transportlist == "Train" && divsionfrom == "Rangpur" && diviListto == "Sylhet"  && paribhantlist == "Ekota Express" && farelist == "One way")){
            fareprice = 1200*inputCalcBox;
            document.getElementById("fareprice").value= fareprice;
            totalprice = 1200*inputCalcBox;
            document.getElementById("totalprice").value= totalprice;
            console.log(totalprice);
        }
    } else{
        document.getElementById("fareprice").value= 0;
        document.getElementById("totalprice").value= 0;
    }
}




