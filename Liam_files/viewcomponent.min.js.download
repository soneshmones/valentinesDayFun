/*! Copyright (c) Epic Systems Corporation 2014

*mborofsk 7/13 266376 - update refresh function
*mborofsk 2/14 300081 - Ensuring loading merges objects and uses default propertly
*/
$$WPComp.ViewComponent=function WPComp$ViewComponent(a){this.Components$Component(a)};$$WPComp.ViewComponent.prototype={Url:"",refresh:function WPComp$ViewComponent$refresh(){var a=this,b=-a.$container.outerHeight(true);a.load(a._lastRequest);b+=a.$container.outerHeight(true);a.$container.trigger("resize",{delta:b})},copy:function WPComp$VieComponent$copy(a){a=a||{};a.Html=a.Html||this.$content.get(0).innerHTML;return new this._constructor(a)},load:function(b,c){var a=this;a._lastRequest=b||a.Url;a.makeRequest({type:"GET",success:a.html,dataType:"html",url:b||a.Url},"load",c)}};$$WPComp.ViewComponent.extend("Components.Component")