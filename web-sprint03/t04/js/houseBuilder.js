function  HouseBuilder(address, description, owner, size, roomCount) {
    this.address = address;
    this.description = description;
    this.owner = owner;
    this.size = size;
    this.roomCount = roomCount;
    this._averageBuildSpeed = 0.5;
    this.getDaysToBuild = function(){
        return this.size / this._averageBuildSpeed;
    }
}

houseBlueprint = HouseBuilder.prototype = {
    address: this.address,
    description : this.description,
    owner : this.owner,
    size : this.size,
    date: new Date(),
    getDaysToBuild: function(){
        return this.size / this._averageBuildSpeed;
    }
};