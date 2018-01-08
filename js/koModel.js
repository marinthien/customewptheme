/*  Author:Hieu Thien Nguyen
 * 
 */

$(document).ready(function(){
    $(".box").lazyLoading({
        itemList:[".right-box",".left-box"]
    });   
    $(window).bind('scroll', function() {        
     $(window).scrollTop() > 250? $('#Site-Nav').css({  "z-index":1000, position:'fixed' }): $('#Site-Nav').css({position:'relative'});
    
    });
    

 
    /*Loading the data from json file and apply ko binding*/
        var AmiciMenuList=[];
         var AmiciWineList=[];
    //read the amici menu file
    var contactUs=null;
    var aboutUs=null;
   /*
    $.getJSON( "amici.json", function( resultset) {  }).done(function(){}).then(function(resultset){    
        $.each(resultset, function(i, obj){     
          contactUs=obj["contactUs"];
          aboutUs=obj["about"];
          
        for(var i=0; i<obj["menuSection"].length;i++)
            {
                var course=new AmiciMenu(obj["menuSection"][i]["courseType"], obj["menuSection"][i]["items"]);   
                AmiciMenuList.push(course);
            }
        for(var i=0; i<obj["wineSection"].length;i++)
            {
                var wine=new AmiciWine(obj["wineSection"][i]["wineType"], obj["wineSection"][i]["items"]);   
                AmiciWineList.push(wine);
            }
         
        });
       
        //ko.applyBindings(new AmiciModel(AmiciMenuList,AmiciWineList,contactUs,aboutUs));
       // console.log(AmiciWineList);

    });
*/
});




/*class AmiciItem*/
function AmiciItem(recipe,price){
    this.recipe=recipe;
    this.price=price;
}
/*class AmiciMenu*/
function AmiciMenu(courseType,items){
  //console.log(items);
  this.courseType=courseType;
  this.items=items;
  for(var i=0; i< items.length;i++)
      { 
          //add each dish to the items array
          //this.items.push({"recipe":items[i].recipe,"price":items[i].price});
      }
  
}
/*Create AmiciModel for ko binding*/
function AmiciModel(items,wineItems,contactUs,about){
    this.dish=ko.observableArray(items);
    this.wine=ko.observableArray(wineItems);
    this.contact=new AmiciContact(contactUs);
    this.about=new AmiciAbout(about);  
    this.test=new AmiciWine();
    
}
/*
 * AmiciWine class
 * @param {type} wineType
 * @param {type} items
 * @returns {AmiciWine}
 */
function AmiciWine(wineType,items)
{
    this.wineType=wineType;
    this.items=items;
    
}

function AmiciContact(contact)
{
    this.header=contact.header;
    this.address=contact.address;
    this.phone=contact.phone;
    this.fax=contact.fax;
    this.hour=contact.hour;
}
function AmiciAbout(about)
{
    
    this.header=about.header;
    this.description=about.description;
}