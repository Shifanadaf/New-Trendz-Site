Bannerslides=new Array('../img/kit2.jpg','../img/h.jpg','../img/furniture.jpg','../img/kitchen.jpg','../img/bed.jpg','../img/g.jpg','../img/i.jpg','../img/j.jpg');
count=0
function Slider()
{ 
if (document.images)
{
if (count==Bannerslides.length) 
{
count=0
}
document.Banner.src=Bannerslides[count]
 count++
setTimeout("Slider()",2000)
}
}
//Slider Script -end