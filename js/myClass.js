/* 
 *My Class Library
 *
 */
var myUtil=
{
   gallery:
           {
                nextImg:0,
                slideArr:null,
                slideNext:function(){
                    this.nextImg++;          
                    if(this.nextImg>this. slideArr.length-1)
                        nextImg=0;                    
                    setTimeout(this.slideMe(),1000);
                },
                slideMe:function(){
                    ///console.log(this.slideArr); 
                    $(this.slideArr[this.nextImg]).show();
                      
                     setTimeout(this.slideNext,1000);
                }
           }
};


