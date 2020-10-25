  function Node(element) {
        this.element = element;
        this.next = null;
        this.previous = null;
    }

    function LList() {
        this.head = new Node("head");
        this.head.next = this.head;
        this.find = find;
        this.insert = insert;
        this.display = display;
        this.remove = remove;
        this.findLast = findLast;
        this.dispReverse = dispReverse;
    }

    function insert(newElement, item) {
        var newNode = new Node(newElement);
        var current = this.find(item);
        newNode.next = current.next;
        newNode.previous = current;
        current.next = newNode;
    }

    function display() {
        var currNode = this.head;
        while (!(currNode.next == null) && !(currNode.next.element == "head")) {
            console.log(currNode.next.element);
            currNode = currNode.next;
        }
    }

    function find(item) {
        var currNode = this.head;
        while (currNode.element != item && currNode.next.element != "head") {
            currNode = currNode.next;
        }
        return currNode;
    }

    function remove(item) {
        var currNode = this.find(item);
        if (!(currNode.next == null) && !(currNode.next.element == "head")) {
            currNode.previous.next = currNode.next;
            currNode.next.previous = currNode.previous;
            currNode.next = null;
            currNode.previous = null;
        }
    }

    function findLast() {
        var currNode = this.head;
        while (!(currNode.next == null) && !(currNode.next.element == "head")) {
            currNode = currNode.next;
        }
        return currNode;
    }

    function dispReverse() {
        var currNode = this.head;
        currNode = this.findLast();
        while (!(currNode.previous == null) && !(currNode.next.element == "head")) {
            console.log(currNode.element);
            currNode = currNode.previous;
        }
    }

    var cities = new LList();
    cities.insert("Conway", "head");
    cities.insert("Russellvile", "Conway");
    cities.insert("Carlisle", "Russellvile");
    cities.insert("Alma", "Carlisle");
    cities.display();
    cities.remove("Carlisle");
    cities.display();
    cities.dispReverse();