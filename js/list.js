/***
	Required libs:
	jQuery
	jQuery-dateFormat
	owl.carousel
	mustache.js
***/

var List={
	init:function(container,list){
		this.list = list || [],

		this.$container = $(container);
		this.currFilter = "all";

		this.cacheDom();
		this.bindEvents();
		this.render();
	},
	cacheDom:function(){
		this.$listContainer = this.$container.find(".list-item-container");

		this.template = {};
		this.template.listItem = this.$container.find(".list-item-template").html();

		this.$descriptionContainer = this.$container.find(".list-description-container");
		this.template.listDescription = this.$container.find(".list-description-template").html();

		this.$imageContainer = this.$container.find(".list-image-container");
		this.template.listImage = this.$container.find(".list-image-template").html();


		this.$filterBox = this.$container.find(".list-category-filter");
	},
	bindEvents:function(){
		this.$listContainer.on('click','li',this.selectItem.bind(this));
		this.$filterBox.change(this.updateFilter.bind(this));
	},
	render:function(){

		// Render event lists
		if(typeof this.updateList === "undefined" || this.updateList==true){
			
			var filteredList = this.currFilter=="all" ? this.list:_.filter(this.list,{category:this.currFilter});

			var listNames = _.map(filteredList,function(obj){
				return _.pick(obj,['name']);
			});
			this.$listContainer.html(Mustache.render(this.template.listItem,{list:listNames}));

			this.updateList = false;
		}


		//Render event details
		if(typeof this.renderItem === "undefined" || this.renderItem==true){
			//Get first list element if no item is selected
			var item = this.renderItem?_.filter(this.list,["name",this.currItem])[0]:this.list[0];
			//=====Preprocessing======
			if(typeof item.date === "object"){
				item.date = _.map(item.date,function(date){
					return DateFormat.format.date(new Date(date),"D MMM-yy");
				});
				if(item.isDateRange == true){
					item.date = "From "+item.date.join(" till ");
				}else{
					item.date = item.date.join(", ");
				}
			}
			//============ End of preprocessing ========

			
			//======== Load images in Owl-carousel ==========

			//Empty carousel first
			for(i=0;i<this.$imageContainer.find(".owl-dot").length;i++){
				this.$imageContainer.trigger("remove.owl.carousel",[i]);
			}

			//Add images
			$.each(item.image,function(i,image){
				this.$imageContainer.trigger("add.owl.carousel",Mustache.render(this.template.listImage,image));
			}.bind(this));
			this.$imageContainer.trigger("refresh.owl.carousel");


			this.$descriptionContainer.html(Mustache.render(this.template.listDescription,item));

			this.renderItem = false;
		}
	},
	selectItem:function(event){
		var newItem = $(event.target).text();
		
		if(this.currItem == newItem) return false;

		this.currItem = newItem;

		this.renderItem = true;
		this.render();
	},
	updateFilter:function(){
		this.currFilter = this.$filterBox.find("option:selected").val();

		this.updateList = true;
		this.render();
	}
}