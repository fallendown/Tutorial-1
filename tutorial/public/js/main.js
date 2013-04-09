var Person = Backbone.Model.extend({
	defaults: {
		name: 'Kris Rapier',
		age: 37,
		occupation: 'worker'
	},

	validate: function(attrs) {
		if ( attrs.age < 0){
			return 'Age must be positive stupid.';
		};
	},


	work: function(){
		return this.get('name') + ' is working.';
	}
	
});