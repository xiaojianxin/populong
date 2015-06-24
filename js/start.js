var AddressTree={};
AddressTree["a_row"]=new Array(); //存所有记录
with(AddressTree){
    a_row["1"]=["北京市",0,1];
    a_row["2"]=["上海市",0,1];
    a_row["3"]=["天津市",0,1];
    a_row["4"]=["重庆市",0,1];
    a_row["5"]=["河北",0,0];
    a_row["6"]=["山西",0,0];
    a_row["7"]=["内蒙古",0,0];
    a_row["8"]=["辽宁",0,0];
    a_row["9"]=["吉林",0,0];
    a_row["10"]=["黑龙江",0,0];
    a_row["11"]=["江苏",0,0];
    a_row["12"]=["渐江",0,0];
    a_row["13"]=["安徽",0,0];
    a_row["14"]=["福建",0,0];
    a_row["15"]=["江西",0,0];
    a_row["16"]=["山东",0,0];
    a_row["17"]=["河南",0,0];
    a_row["18"]=["湖北",0,0];
    a_row["19"]=["湖南",0,0];
    a_row["20"]=["广东",0,0];
    a_row["21"]=["广西",0,0];
    a_row["22"]=["海南",0,0];
    a_row["23"]=["四川",0,0];
    a_row["24"]=["贵州",0,0];
    a_row["25"]=["云南",0,0];
    a_row["26"]=["西藏",0,0];
    a_row["27"]=["陕西",0,0];
    a_row["28"]=["甘肃",0,0];
    a_row["29"]=["青海",0,0];
    a_row["30"]=["宁夏",0,0];
    a_row["31"]=["新壃",0,0];
    a_row["32"]=["香港",0,1];
    a_row["33"]=["澳门",0,1];
    a_row["34"]=["台湾",0,0];
    a_row["35"]=["石家庄",5,1];
    a_row["36"]=["唐山",5,1];
    a_row["37"]=["秦皇岛",5,1];
    a_row["38"]=["邯郸",5,1];
    a_row["39"]=["邢台",5,1];
    a_row["40"]=["保定",5,1];
    a_row["41"]=["张家口",5,1];
    a_row["42"]=["承德",5,1];
    a_row["43"]=["沧州",5,1];
    a_row["44"]=["廊坊",5,1];
    a_row["45"]=["衡水",5,1];
    a_row["46"]=["太原",6,1];
    a_row["47"]=["大同",6,1];
    a_row["48"]=["阳泉",6,1];
    a_row["49"]=["长治",6,1];
    a_row["50"]=["晋城",6,1];
    a_row["51"]=["朔州",6,1];
    a_row["52"]=["晋中",6,1];
    a_row["53"]=["运城",6,1];
    a_row["54"]=["忻州",6,1];
    a_row["55"]=["临汾",6,1];
    a_row["56"]=["吕梁",6,1];
    a_row["58"]=["呼和浩特",7,1];
    a_row["59"]=["包头",7,1];
    a_row["60"]=["乌海",7,1];
    a_row["61"]=["赤峰",7,1];
    a_row["62"]=["通辽",7,1];
    a_row["63"]=["鄂尔多斯",7,1];
    a_row["64"]=["呼伦贝尔",7,1];
    a_row["65"]=["乌兰察布市",7,1];
    a_row["66"]=["锡林郭勒盟",7,1];
    a_row["67"]=["巴彦淖尔盟",7,1];
    a_row["68"]=["阿拉善盟",7,1];
    a_row["69"]=["兴安盟",7,1];
    a_row["70"]=["沈阳",8,1];
    a_row["71"]=["大连",8,1];
    a_row["72"]=["鞍山",8,1];
    a_row["73"]=["抚顺",8,1];
    a_row["74"]=["本溪",8,1];
    a_row["75"]=["丹东",8,1];
    a_row["76"]=["锦州",8,1];
    a_row["77"]=["葫芦岛",8,1];
    a_row["78"]=["营口",8,1];
    a_row["79"]=["盘锦",8,1];
    a_row["80"]=["阜新",8,1];
    a_row["81"]=["辽阳",8,1];
    a_row["82"]=["铁岭",8,1];
    a_row["83"]=["朝阳",8,1];
    a_row["84"]=["长春",9,1];
    a_row["85"]=["吉林",9,1];
    a_row["86"]=["四平",9,1];
    a_row["87"]=["辽源",9,1];
    a_row["88"]=["通化",9,1];
    a_row["89"]=["白山",9,1];
    a_row["90"]=["松原",9,1];
    a_row["91"]=["白城",9,1];
    a_row["92"]=["延办朝鲜族自治州",9,1];
    a_row["93"]=["哈尔滨",10,1];
    a_row["94"]=["齐齐哈尔",10,1];
    a_row["95"]=["鹤岗",10,1];
    a_row["96"]=["双鸭山",10,1];
    a_row["97"]=["鸡西",10,1];
    a_row["98"]=["大庆",10,1];
    a_row["99"]=["伊春",10,1];
    a_row["100"]=["牡丹江",10,1];
    a_row["101"]=["佳木斯",10,1];
    a_row["102"]=["七台河",10,1];
    a_row["103"]=["黑河",10,1];
    a_row["104"]=["绥化",10,1];
    a_row["105"]=["大兴安岭",10,1];
    a_row["106"]=["南京",11,1];
    a_row["107"]=["无锡",11,1];
    a_row["108"]=["徐州",11,1];
    a_row["109"]=["常州",11,1];
    a_row["110"]=["苏州",11,1];
    a_row["111"]=["南通",11,1];
    a_row["112"]=["连云港",11,1];
    a_row["113"]=["淮安",11,1];
    a_row["114"]=["盐城",11,1];
    a_row["115"]=["扬州",11,1];
    a_row["116"]=["镇江",11,1];
    a_row["117"]=["泰州",11,1];
    a_row["118"]=["宿迀",11,1];
    a_row["119"]=["杭州",12,1];
    a_row["120"]=["宁波",12,1];
    a_row["121"]=["温州",12,1];
    a_row["122"]=["嘉兴",12,1];
    a_row["123"]=["湖州",12,1];
    a_row["124"]=["绍兴",12,1];
    a_row["125"]=["金华",12,1];
    a_row["126"]=["舟山",12,1];
    a_row["127"]=["台州",12,1];
    a_row["128"]=["丽水",12,1];
    a_row["129"]=["衢州",12,1];
    a_row["130"]=["合肥",13,1];
    a_row["131"]=["芜湖",13,1];
    a_row["132"]=["蚌埠",13,1];
    a_row["133"]=["淮南",13,1];
    a_row["134"]=["马鞍山",13,1];
    a_row["135"]=["淮北",13,1];
    a_row["136"]=["铜陵",13,1];
    a_row["137"]=["安庆",13,1];
    a_row["138"]=["黄山",13,1];
    a_row["139"]=["滁州",13,1];
    a_row["140"]=["阜阳",13,1];
    a_row["141"]=["宿州",13,1];
    a_row["142"]=["巢湖",13,1];
    a_row["143"]=["六安",13,1];
    a_row["144"]=["毫州",13,1];
    a_row["145"]=["池州",13,1];
    a_row["146"]=["宣城",13,1];
    a_row["147"]=["福州",14,1];
    a_row["148"]=["厦门",14,1];
    a_row["149"]=["莆田",14,1];
    a_row["150"]=["三明",14,1];
    a_row["151"]=["泉州",14,1];
    a_row["152"]=["漳州",14,1];
    a_row["153"]=["南平",14,1];
    a_row["154"]=["龙岩",14,1];
    a_row["155"]=["宁德",14,1];
    a_row["156"]=["南昌",15,1];
    a_row["157"]=["景德镇",15,1];
    a_row["158"]=["萍乡",15,1];
    a_row["159"]=["新余",15,1];
    a_row["160"]=["九江",15,1];
    a_row["161"]=["鹰潭",15,1];
    a_row["162"]=["吉安",15,1];
    a_row["163"]=["宜春",15,1];
    a_row["164"]=["抚州",15,1];
    a_row["165"]=["上饶",15,1];
    a_row["166"]=["赣州",15,1];
    a_row["167"]=["济南",16,1];
    a_row["168"]=["青岛",16,1];
    a_row["169"]=["淄博",16,1];
    a_row["170"]=["枣庄",16,1];
    a_row["171"]=["东营",16,1];
    a_row["172"]=["潍坊",16,1];
    a_row["173"]=["烟台",16,1];
    a_row["174"]=["威海",16,1];
    a_row["175"]=["济宁",16,1];
    a_row["176"]=["泰安",16,1];
    a_row["177"]=["日照",16,1];
    a_row["178"]=["莱芜",16,1];
    a_row["179"]=["德州",16,1];
    a_row["180"]=["临沂",16,1];
    a_row["181"]=["聊城",16,1];
    a_row["182"]=["滨州",16,1];
    a_row["183"]=["菏泽",16,1];
    a_row["184"]=["郑州",17,1];
    a_row["185"]=["开封",17,1];
    a_row["186"]=["洛阳",17,1];
    a_row["187"]=["平顶山",17,1];
    a_row["188"]=["焦作",17,1];
    a_row["189"]=["鹤壁",17,1];
    a_row["190"]=["新乡",17,1];
    a_row["191"]=["安阳",17,1];
    a_row["192"]=["濮阳",17,1];
    a_row["193"]=["许昌",17,1];
    a_row["194"]=["漯河",17,1];
    a_row["195"]=["三门峡",17,1];
    a_row["196"]=["南阳",17,1];
    a_row["197"]=["南丘",17,1];
    a_row["198"]=["信阳",17,1];
    a_row["199"]=["周口",17,1];
    a_row["200"]=["驻马店",17,1];
    a_row["201"]=["济源",17,1];
    a_row["202"]=["武汉",18,1];
    a_row["203"]=["黄石",18,1];
    a_row["204"]=["襄樊",18,1];
    a_row["205"]=["十堰",18,1];
    a_row["206"]=["荆州",18,1];
    a_row["207"]=["宜昌",18,1];
    a_row["208"]=["荆门",18,1];
    a_row["209"]=["鄂州",18,1];
    a_row["210"]=["孝感",18,1];
    a_row["211"]=["黄冈",18,1];
    a_row["212"]=["咸宁",18,1];
    a_row["213"]=["随州",18,1];
    a_row["214"]=["仙桃",18,1];
    a_row["215"]=["天门",18,1];
    a_row["216"]=["潜江",18,1];
    a_row["217"]=["神农架",18,1];
    a_row["218"]=["恩施土家族自治州",18,1];
    a_row["219"]=["长沙",19,1];
    a_row["220"]=["株洲",19,1];
    a_row["221"]=["湘潭",19,1];
    a_row["222"]=["衡阳",19,1];
    a_row["223"]=["邵阳",19,1];
    a_row["224"]=["岳阳",19,1];
    a_row["225"]=["常德",19,1];
    a_row["226"]=["张家界",19,1];
    a_row["227"]=["益阳",19,1];
    a_row["228"]=["郴州",19,1];
    a_row["229"]=["怀化",19,1];
    a_row["230"]=["娄底",19,1];
    a_row["231"]=["湘西土家族苗族自治州",19,1];
    a_row["232"]=["广州",20,1];
    a_row["233"]=["深圳",20,1];
    a_row["234"]=["珠海",20,1];
    a_row["235"]=["汕头",20,1];
    a_row["236"]=["韶关",20,1];
    a_row["237"]=["佛山",20,1];
    a_row["238"]=["江门",20,1];
    a_row["239"]=["湛江",20,1];
    a_row["240"]=["茂名",20,1];
    a_row["241"]=["肇庆",20,1];
    a_row["242"]=["惠州",20,1];
    a_row["243"]=["梅州",20,1];
    a_row["244"]=["汕尾",20,1];
    a_row["245"]=["河源",20,1];
    a_row["246"]=["阳江",20,1];
    a_row["247"]=["清远",20,1];
    a_row["248"]=["东莞",20,1];
    a_row["249"]=["中山",20,1];
    a_row["250"]=["潮州",20,1];
    a_row["251"]=["揭阳",20,1];
    a_row["252"]=["云浮",20,1];
    a_row["253"]=["南宁",21,1];
    a_row["254"]=["柳州",21,1];
    a_row["255"]=["桂林",21,1];
    a_row["256"]=["梧州",21,1];
    a_row["257"]=["北海",21,1];
    a_row["258"]=["防城港",21,1];
    a_row["259"]=["钦州",21,1];
    a_row["260"]=["贵港",21,1];
    a_row["261"]=["玉林",21,1];
    a_row["262"]=["百色",21,1];
    a_row["263"]=["贺州",21,1];
    a_row["264"]=["河池",21,1];
    a_row["265"]=["来宾",21,1];
    a_row["266"]=["崇左",21,1];
    a_row["267"]=["海口",22,1];
    a_row["268"]=["三亚",22,1];
    a_row["269"]=["五指山",22,1];
    a_row["270"]=["琼海",22,1];
    a_row["271"]=["儋州",22,1];
    a_row["272"]=["文昌",22,1];
    a_row["273"]=["方宁",22,1];
    a_row["274"]=["东方",22,1];
    a_row["275"]=["澄迈",22,1];
    a_row["276"]=["定安",22,1];
    a_row["277"]=["屯昌",22,1];
    a_row["278"]=["临高",22,1];
    a_row["279"]=["白沙黎族自治县",22,1];
    a_row["280"]=["江黎族自治县",22,1];
    a_row["281"]=["乐东黎族自治县",22,1];
    a_row["282"]=["陵水黎族自治县",22,1];
    a_row["283"]=["保亭黎族苗族自治县",22,1];
    a_row["284"]=["琼中称许苗族自治县",22,1];
    a_row["285"]=["成都",23,1];
    a_row["286"]=["自贡",23,1];
    a_row["287"]=["攀枝花",23,1];
    a_row["288"]=["泸州",23,1];
    a_row["289"]=["德阳",23,1];
    a_row["290"]=["绵阳",23,1];
    a_row["291"]=["广元",23,1];
    a_row["292"]=["遂宁",23,1];
    a_row["293"]=["内江",23,1];
    a_row["294"]=["乐山",23,1];
    a_row["295"]=["南充",23,1];
    a_row["296"]=["宜宾",23,1];
    a_row["297"]=["广安",23,1];
    a_row["298"]=["达州",23,1];
    a_row["299"]=["眉山",23,1];
    a_row["300"]=["雅安",23,1];
    a_row["301"]=["巴中",23,1];
    a_row["302"]=["资阳",23,1];
    a_row["303"]=["阿坝藏族羌族自治州",23,1];
    a_row["304"]=["甘孜藏族自治州",23,1];
    a_row["305"]=["凉山彝族自治州",23,1];
    a_row["306"]=["贵阳",24,1];
    a_row["307"]=["六盘水",24,1];
    a_row["308"]=["遵义",24,1];
    a_row["309"]=["安顺",24,1];
    a_row["310"]=["铜仁",24,1];
    a_row["311"]=["毕节",24,1];
    a_row["312"]=["黔西南布依族苗族自治州",24,1];
    a_row["313"]=["黔东南苗族自治州",24,1];
    a_row["314"]=["黔南布依族苗族自治州",24,1];
    a_row["315"]=["昆明",25,1];
    a_row["316"]=["曲靖",25,1];
    a_row["317"]=["玉溪",25,1];
    a_row["318"]=["保山",25,1];
    a_row["319"]=["昭通",25,1];
    a_row["320"]=["丽江",25,1];
    a_row["321"]=["思茅",25,1];
    a_row["322"]=["监沧",25,1];
    a_row["323"]=["文山壮族苗族自治州",25,1];
    a_row["324"]=["红河哈尼族彝族自治州",25,1];
    a_row["325"]=["西双版纳傣族自治州",25,1];
    a_row["326"]=["楚雄彝族自治州",25,1];
    a_row["327"]=["大理白族自治州",25,1];
    a_row["328"]=["德宏傣族景颇族自治州",25,1];
    a_row["329"]=["怒江僳僳族自治州",25,1];
    a_row["330"]=["迪庆藏族自治州",25,1];
    a_row["331"]=["拉萨",26,1];
    a_row["332"]=["那曲",26,1];
    a_row["333"]=["昌都",26,1];
    a_row["334"]=["山南",26,1];
    a_row["335"]=["日喀则",26,1];
    a_row["336"]=["阿里",26,1];
    a_row["337"]=["林芝",26,1];
    a_row["338"]=["西安",27,1];
    a_row["339"]=["铜川",27,1];
    a_row["340"]=["宝鸡",27,1];
    a_row["341"]=["咸阳",27,1];
    a_row["342"]=["渭南",27,1];
    a_row["343"]=["延安",27,1];
    a_row["344"]=["汉中",27,1];
    a_row["345"]=["榆林",27,1];
    a_row["346"]=["安康",27,1];
    a_row["347"]=["商洛",27,1];
    a_row["348"]=["兰州",28,1];
    a_row["349"]=["金昌",28,1];
    a_row["350"]=["白银",28,1];
    a_row["351"]=["天水",28,1];
    a_row["352"]=["嘉峪关",28,1];
    a_row["353"]=["武威",28,1];
    a_row["354"]=["张掖",28,1];
    a_row["355"]=["平凉",28,1];
    a_row["356"]=["洒泉",28,1];
    a_row["357"]=["庆阳",28,1];
    a_row["358"]=["定西",28,1];
    a_row["359"]=["陇南",28,1];
    a_row["360"]=["临夏回族自治州",28,1];
    a_row["361"]=["甘南藏族自治州",28,1];
    a_row["362"]=["西宁",29,1];
    a_row["363"]=["海东",29,1];
    a_row["364"]=["海北藏族自治州",29,1];
    a_row["365"]=["黄南藏族自治州",29,1];
    a_row["366"]=["海南藏族自治州",29,1];
    a_row["367"]=["果洛藏族自治州",29,1];
    a_row["368"]=["玉树藏族自治州",29,1];
    a_row["369"]=["海西蒙古藏族自治州",29,1];
    a_row["370"]=["银川",30,1];
    a_row["371"]=["石嘴山",30,1];
    a_row["372"]=["吴忠",30,1];
    a_row["373"]=["固原",30,1];
    a_row["374"]=["乌鲁木齐",31,1];
    a_row["375"]=["克拉玛依",31,1];
    a_row["376"]=["石河子",31,1];
    a_row["377"]=["阿拉尔",31,1];
    a_row["378"]=["图木舒克",31,1];
    a_row["379"]=["五家渠",31,1];
    a_row["380"]=["吐鲁",31,1];
    a_row["381"]=["哈密",31,1];
    a_row["382"]=["和田",31,1];
    a_row["383"]=["阿克苏",31,1];
    a_row["384"]=["喀什",31,1];
    a_row["385"]=["克孜勒苏柯尔克孜自治州",31,1];
    a_row["386"]=["巴音郭楞蒙古自治州",31,1];
    a_row["387"]=["昌吉回族自治州",31,1];
    a_row["388"]=["博尔塔拉蒙古自治州",31,1];
    a_row["389"]=["伊犁哈萨克自治州",31,1];
    a_row["390"]=["台北",34,1];
    a_row["391"]=["高雄",34,1];
    a_row["392"]=["基隆",34,1];
    a_row["393"]=["台中",34,1];
    a_row["394"]=["台南",34,1];
    a_row["395"]=["新竹",34,1];
    a_row["396"]=["嘉义",34,1];
    a_row["397"]=["sss",285,1];
}
var j=0;
AddressTree["a_record"]=new Array();//存储记录的记录号
for(i in AddressTree["a_row"]){AddressTree["a_record"][j++]=i;}
AddressTree.ObjNumber=1;
//地址选择构造函数
function LightManAddressTree(){
    var Data = AddressTree; //数据记录数据变量
    this.noselectshow=["--请选择省份--","--请选择城市--"];//各级不选择显示值
    this.grade=0;  //级数
    this.idvalue=0; //地址选择值的id号
    this.text=""; //地址字符串
    this.listseparator=" "; //地址字符串中的分隔符号
    this.selectName="a_tree"+(AddressTree.ObjNumber++)+"_";
    //定义地址数据结束
    this.getfontpath =  function(id){ //取得指定记录号的上级路径
        var path = "",upid;
        try{
            upid=(isNaN(id)?0:id);
            while(upid!=0){
                var upid=Data["a_row"][upid][1];
                if(path!="")path=upid+","+path;else path=upid;
            }
        }
        catch(e){};
        return eval("["+path+"]");
    }
    //建立下列表
    this.selectshowlevel=function(obj,upid,def){
        var selectobj,optionobj,havedef;
        selectobj=document.getElementById(this.selectName+this.grade);
        if(selectobj){
            document.getElementById(this.selectName+this.grade).options.length=0;
        }else{
            selectobj=document.createElement("select");
            selectobj.id=this.selectName+this.grade;
            selectobj.name=this.selectName+this.grade;
            selectobj.grade=this.grade;
            selectobj.obj=this;
            selectobj.onchange=function(){
                if(this.options[this.selectedIndex].value!=""){
                    this.obj.selectshow(obj,this[this.selectedIndex].value);
                }
                else{
                    if(this.obj.grade>0){
                        for(var i=this.grade+1;i<this.obj.grade-1;i++){
                            var df=document.getElementById(this.obj.selectName+i);
                            df.options.length=0;
                            defaultoption(this.obj,df,i);
                        }
                        //最得值
                        getvalue(this.obj);
                    }
                }
            }
        }
        defaultoption(this,selectobj,this.grade);
        //显示级别下数据
        if(upid>=0){
            for(var j=0;j<Data["a_record"].length;j++){
                thisrecord=Data["a_row"][Data["a_record"][j]];
                if(thisrecord[1]==upid){
                    optionobj=document.createElement("option");
                    optionobj.text=thisrecord[0];
                    optionobj.value=Data["a_record"][j];
                    selectobj.options.add(optionobj);
                    if(def==Data["a_record"][j]) havedef=true;
                }
            }
        }
        if(havedef)selectobj.value=def;
        return selectobj;
    }

    this.selectshow = function(obj,id){ //显示选中记录号
        var selectobj,optionobj,thisrecord;
        var lastgrade,tempid=id,tempgrade;
        var fontpath=this.getfontpath(id);
        tempgrade=this.grade;
        this.grade=0;
        //显示选中前部分内容
        for (var i=0;i<fontpath.length;i++){
            if(!document.getElementById(this.selectName+this.grade)){
                if(i<fontpath.length-1)
                    this.Add(obj,this.selectshowlevel(obj,fontpath[i],fontpath[i+1]));
                else
                    this.Add(obj,this.selectshowlevel(obj,fontpath[i],id));
            }
            this.grade++;
        }
        //显示选中后部分内容
        do{
            lastgrade=this.selectshowlevel(obj,tempid);
            tempid=lastgrade.value;
            if (tempid=="")tempid=-1;
            this.Add(obj,lastgrade);
            this.grade++;
        }
        while(lastgrade.options.length>0);
        //删除多余选项
        for(i=this.grade-1;i<tempgrade-1;i++){
            obj.removeChild(document.getElementById(this.selectName+i));
        }
        //最得值
        getvalue(this);
    }

    this.Add=function(obj,s){
        if(s.options.length>0&&!document.getElementById(s.id))obj.appendChild(s);
    }
    //获取选择值
    function getvalue(obj){
        var sel
        obj.text="";
        obj.idvalue=0;
        for(var i=0;i<obj.grade-1;i++){
            sel=document.getElementById(obj.selectName+i);
            if(sel.value!=""){
                obj.text+=(obj.text.match("\\S")==null?"":obj.listseparator)+sel.options[sel.selectedIndex].text;
                obj.idvalue=sel.options[sel.selectedIndex].value;
            }else{break;}
        }
    }
    //级别显示数据
    function defaultoption(obj,sobj,g){
        try{
            if(obj.noselectshow[g]){
                optionobj=document.createElement("option");
                optionobj.text=obj.noselectshow[g];
                optionobj.value="";
                sobj.options.add(optionobj,0);
            }
        }
        catch(e){}
    }
}
$('#nextstep').click(function(e){

    $('.show').addClass('hidden0');
    $('.show').removeClass('show');
    $('.hidden1').addClass('show');
    $('.hidden1').removeClass('hidden1');



});
$('#nextStep_next').click(function(e){

    $('.show').addClass('hidden1');
    $('.show').removeClass('show');
    $('.hidden2').addClass('show');
    $('.hidden2').removeClass('hidden2');

});

$('#previousStep_prev').click(function(e){

    $('.show').addClass('hidden1');
    $('.show').removeClass('show');
    $('.hidden0').addClass('show');
    $('.hidden0').removeClass('hidden0');



});

$('#previousStep3').click(function(e){

    $('.show').addClass('hidden2');
    $('.show').removeClass('show');
    $('.hidden1').addClass('show');
    $('.hidden1').removeClass('hidden1');



});
$(function() {
    KindEditor.ready(function(K) {
         K.create('textarea[name="inputProjIntro"]', {
            allowFileManager : true
        });
    });
    $('#file_pic').uploadify({


        'swf'  : 'uploadify.swf',   //指定上传控件的主体文件，默认‘uploader.swf’
        'uploader'    : '/file',       //指定服务器端上传处理文件，默认‘upload.php’
        'auto'      : true,               //选定文件后是否自动上传，默认false
        'folder'    : '/userphoto'   ,     //要上传到的服务器路径，
        'multi'     : false,               //是否允许同时上传多文件，默认false
        'fileExt'   : '*.jpg;*.bmp;*.png;*.gif',      //控制可上传文件的扩展名，启用本项时需同时声明fileDesc
        fileSizeLimit:'2MB',
        'fileObjName': 'file',
        'onUploadSuccess': function(file, data, response) {
            var data1 = data.substring(1,data.length-1);
            $('#showUploadImg').attr("src",data1);
            $('#imgurl1').attr('value',data);
            $('#showUploadImg').show();
            //$('#photo').attr("value",response);
        },
        'onError'          : function(event, queueID, fileObj)
        {
            alert("文件:" + fileObj.name + " 上传失败");
        }
    });

    $('.select-ban').click(function(){
        var id = $(this).attr('id');
        $(".active").removeClass('active');
        $(this).addClass('active');
        return $('#checkboxInput'+id).click();
    });
    var obj=document.getElementById("selectCity");
    var city=new LightManAddressTree;
    city.selectshow(obj,0);
    $("#inputProjName").bind("blur",function(){
        var len=$(this).val().length;
        console.log(len);
        if(len==0)
        {
            $("#projNameError").text("项目名称不能为空");
        }
        else if(len>20)
        {
            $("#projNameError").text("不能超过20个字");
        }
        else
        {
            $("#projNameError").text("");
        }
    });
    $("#inputProjName").bind("focus",function(){

        $("#projNameError").text("");
    });
    $("#gain_num").bind("blur",function(){
        var len=$(this).val().length;
        var num=parseInt($(this).val());
        var error=$("#gainNumError");
        if(len==0)
        {
            error.text("筹集资金不能为空");
        }
        else if(num>=10000)
        {
            error.text("")

        }
        else if(num&&num<10000)
        {
            error.text("不应少于10000");
        }
        else
        {
            error.text("请输入数字");
        }
    });
    $("#gain_num").bind("focus",function(){

        $("#gainNumError").text("");
    });
    $("#inputRaiseDays").bind("blur",function(){
        var len=$(this).val().length;
        var num=parseInt($(this).val());
        var error=$("#raiseDaysError");
        if(len==0)
        {
            error.text("筹集天数不能为空");
        }
        else if(len>20)
        {
            error.text("不超过20个字");
        }
        else if(num==0)
        {
            error.text("天数最少大于1天");
        }
        else if(num>0)
        {
            error.text("");
        }
        else
        {
            error.text("请输入数字");
        }
    });
    $("#inputRaiseDays").bind("focus",function(){

        $("#raiseDaysError").text("");
    });

    $("#inputProjAbst").bind("blur",function(){
        var len=$(this).val().length;
        console.log(len);
        var error=$("#projAbstError");
        if(len==0)
        {
            error.text("项目描述不能为空");
        }
        else if(len>20)
        {
            error.text("不能超过20个字");
        }
        else
        {
            error.text("");
        }
    });
    $("#inputProjAbst").bind("focus",function(){

        $("#projAbstError").text("");
    });
    $("#a_tree1_0").bind("blur",function(){
        var id=$("#a_tree1_0").val();
        var error=$("#cityError");
        if(id=="")
        {
            error.text("项目地点不能为空");
        }

        else
        {
            error.text("");
        }
    });
    $("#a_tree1_0").bind("focus",function(){

        $("#cityError").text("");
    });
});