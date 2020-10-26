 function Dictionary() {
        this.dataStore = new Array();
        this.add = add;
        this.find = find;
        this.remove = remove;
        this.showAll = showAll;
        this.count = count;
        this.clear = clear;
    }

    function add(key, value) {
        this.dataStore[key] = value;
    }

    function find(key) {
        return this.dataStore[key];
    }

    function remove(key) {
        delete this.dataStore[key];
    }

    function showAll() {
        Object.keys(this.dataStore).sort().forEach(function (key) {
            console.log(key + " -> " + this.dataStore[key]);
        }, this);
    }

    function count() {
        var n = 0;
        for (var key of Object.keys(this.dataStore)) {
            ++n;
        }
        return n;
    }

    function clear() {
        for (var key of Object.keys(this.dataStore)) {
            delete this.dataStore[key];
        }
    }


    var pbook = new Dictionary();
    pbook.add("Mike", "123");
    pbook.add("David", "345");
    pbook.add("Cynthia", "456");
    console.log("David's extensions: " + pbook.find("David"));
    pbook.remove("David");
    pbook.showAll();
    console.log("NUmber of entires: " + pbook.count());
