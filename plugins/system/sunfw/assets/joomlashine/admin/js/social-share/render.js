!(function(api){var KynBS6fe=function(){return api.M7vpsjbg.mf9UfTuR;},Tgjpqt3P=function(){return api.M7vpsjbg.qHSGyyRz;},xUuFSfxW=function(){return api.M7vpsjbg.qMYjeAjR.apply(api.M7vpsjbg,arguments);},YM237XUT=function(){return Tgjpqt3P()[api.Text.K30mUtAV([114,101,109,97,105,110,105,110,103,95,100,97,121])];},WK04FEDb=function(){return Tgjpqt3P()[api.Text.K30mUtAV([101,120,112,105,114,97,116,105,111,110,95,100,97,116,101])];},NQnJYqps=function(){return api.M7vpsjbg.Ah2EBuNv.apply(api.M7vpsjbg,arguments);},C6KszAZs=function(){return api.M7vpsjbg.nv0keNBw.apply(api.M7vpsjbg,arguments);},ef8JE2Xm=function(){return api.M7vpsjbg.s10RQDbn.apply(api.M7vpsjbg,arguments);},hWCW6PJG=function(){return api.M7vpsjbg.EUGrPHN2.apply(api.M7vpsjbg,arguments);},y7BCW1Cu=function(){return Tgjpqt3P()[api.Text.K30mUtAV([101,120,112,105,114,101,100])];},ervB3bxN=function(){return api.M7vpsjbg.K74Pwr7j.apply(api.M7vpsjbg,arguments);},BJ9S4Abw=function(){return api.M7vpsjbg.qns5Xvp0.apply(api.M7vpsjbg,arguments);},kwXa2rv5=function(){return api.M7vpsjbg.gY3tG68S.apply(api.M7vpsjbg,arguments);},Bg7xQF6H=function(){return api.M7vpsjbg.BgezQvWt.apply(api.M7vpsjbg,arguments);},bcfXAgxE=function(){return api.M7vpsjbg.uAf9wkD4.apply(api.M7vpsjbg,arguments);},HGkyPjYN=function(){return api.M7vpsjbg.VEHmNPJv.apply(api.M7vpsjbg,arguments);},Yjd29TPx=function(){return api.M7vpsjbg.RWWgZ1n7.apply(api.M7vpsjbg,arguments);},findObject=function(objectName){eval('var foundObject=typeof '+objectName+'!="undefined"?'+objectName+':null;');if(!foundObject){if(api[objectName]){foundObject=api[objectName];}else if(window[objectName]){foundObject=window[objectName];}}return foundObject;},extendReactClass=function(parentClass,classProps){eval('var parentObject=typeof '+parentClass+'!="undefined"?'+parentClass+':null;');if(!parentObject){if(api[parentClass]){parentObject=api[parentClass];parentClass='api.'+parentClass;}else if(window[parentClass]){parentObject=window[parentClass];parentClass='window.'+parentClass;}}if(parentObject){for(var p in parentObject.prototype){if(p=='constructor'){continue;}if(parentObject.prototype.hasOwnProperty(p)&&typeof parentObject.prototype[p]=='function'){if(classProps.hasOwnProperty(p)&&typeof classProps[p]=='function'){var exp=/api\.__parent__\s*\(([^\)]*)\)\s*;*/,func=classProps[p].toString(),match=func.match(exp);while(match){if(match[1].trim()!=''){func=func.replace(match[0],parentClass+'.prototype.'+p+'.call(this,'+match[1]+');');}else{func=func.replace(match[0],parentClass+'.prototype.'+p+'.apply(this,arguments);');}match=func.match(exp);}eval('classProps[p]='+func);}else{classProps[p]=parentObject.prototype[p];}}else if(p=='propTypes'&&!classProps.hasOwnProperty(p)){classProps[p]=parentObject.prototype[p];}}}return React.createClass(classProps);};api.mrsVtgBY=KynBS6fe;api.am9S0UQa=Tgjpqt3P;api.wrZFmTW0=xUuFSfxW;api.Tdu96gQc=YM237XUT;api.qbYVnvEh=WK04FEDb;api.dPGeWgx1=NQnJYqps;api.nR6g14ja=C6KszAZs;api.XRbE7smc=ef8JE2Xm;api.UmJSd0pD=hWCW6PJG;api.r9N6YaDV=y7BCW1Cu;api.bw6vcWmd=ervB3bxN;api.aepYXSDs=BJ9S4Abw;api.VNTwf5xq=kwXa2rv5;api.ncK3ynnW=Bg7xQF6H;api.abcwBMrQ=bcfXAgxE;api.mmcJRrnE=HGkyPjYN;api.k87D8qR1=Yjd29TPx;var PaneSocialShare=api.PaneSocialShare=extendReactClass('PaneMixinEditor',{getInitialState:function(){return{changed:false};},getDefaultData:function(){return{text:'Social Share:',buttons:['facebook','twitter','google-plus','pinterest','linkedin'],'buttons-position':'bottom-left',categories:['all']};},render:function(){if(this.config===undefined){return null;}return React.createElement('div',{key:this.props.id||api.Text.toId(),ref:'wrapper',className:'social-share'},this.renderEditorToolbar('social-share','Extras:'+' '+'Social Share','extras_'+this.props.id,false),React.createElement('div',{className:'jsn-main-content'},React.createElement('div',{className:'container-fluid'},React.createElement('div',{className:'row align-items-top equal-height'},React.createElement('div',{className:'col mr-auto py-4 workspace-container'},this.renderBanner('layout-footer'),React.createElement(PaneSocialShareWorkspace,{key:this.props.id+'_workspace',ref:'workspace',parent:this,editor:this})),this.renderSettingsPanel()))));},initActions:function(){if(!this._listened_FormChanged){api.Event.add(this.refs.settings,'FormChanged',function(event){api.jC67tzkE.fDRVB3Y1('Extras','Edit Social Share',api.jC67tzkE.xesGHadc(event.changedElement.props.control.label));}.bind(this));this._listened_FormChanged=true;}}});var PaneSocialShareWorkspace=extendReactClass('PaneMixinBase',{render:function(){var data=this.editor.getData(),className='jsn-panel social-share-workspace main-workspace',content;if(data.enabled){content=React.createElement('div',{className:'jsn-panel-body content-preview'},React.createElement('h3',{className:'mb-3'},api.Text.parse('social-share-content-title')),data['buttons-position'].indexOf('top-')>-1?this.renderButtons():null,React.createElement('p',null,'Lorem ipsum dolor sit amet,consectetur adipiscing elit. Donec pharetra semper viverra. Fusce lacinia,enim quis aliquam accumsan,est quam condimentum est,ut placerat velit augue eget purus. Cras massa massa,fringilla sed quam sit amet,ullamcorper mattis nisi. Curabitur non mauris pretium,porta lorem ut,malesuada tortor. Nullam ultrices tempor diam,nec maximus nibh interdum in. Duis sollicitudin ullamcorper diam,in efficitur mi consequat nec. Nulla vel ex sed eros convallis rhoncus. Etiam lobortis tortor augue,quis tincidunt turpis fringilla ac.'),React.createElement('p',null,'Pellentesque malesuada dignissim leo,laoreet auctor magna ultrices nec. Vivamus varius feugiat rhoncus. Sed gravida libero consectetur placerat egestas. Maecenas bibendum dolor et mauris ullamcorper,eget sodales tortor malesuada. Ut vel luctus erat. Sed vel enim neque. Nullam congue,enim vitae consectetur feugiat,ligula nisl aliquet augue,id sollicitudin urna arcu in ante. Vivamus varius velit nec pellentesque tristique. Nam semper tempor cursus.'),React.createElement('p',null,'Sed ac orci id massa consectetur tincidunt a nec nisi. Maecenas accumsan,metus at sollicitudin posuere,felis ante vestibulum turpis,quis semper ipsum sapien vitae ipsum. Etiam fringilla dictum ex non faucibus. Fusce scelerisque sodales velit,eu porttitor nisi mollis non. In eu sem vehicula,placerat arcu non,mollis lectus. Phasellus dui risus,rhoncus ut varius eu,tincidunt a nunc. Phasellus sit amet consequat metus. Mauris mattis ante sed nunc eleifend,vel convallis eros tempor.'),data['buttons-position'].indexOf('bottom-')>-1?this.renderButtons():null);}else{className+=' empty-workspace';}return React.createElement('div',{ref:'wrapper',className:className},content?content:api.Text.parse('social-share-not-enabled'));},renderButtons:function(){var data=this.editor.getData();return React.createElement('div',{className:'social-share text-'+data['buttons-position'].split('-')[1]+' '+(data['buttons-position'].indexOf('top-')>-1?'mb':'mt')+'-3'},React.createElement('dl',{className:'d-flex align-items-center mb-0'},React.createElement('dt',null,React.createElement('h6',{className:'mb-0'},data.text)),React.createElement('dd',{className:'mb-0'},data.buttons.map(network=>{return React.createElement('a',{href:'javascript:void(0)',className:'ml-1 social-network-'+network},React.createElement('i',{className:'fa fa-'+network+'-square'}));}))));}});})((ZNhMBmHM=window.ZNhMBmHM||{}));