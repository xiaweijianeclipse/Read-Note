    function Stack() {
        this.dataStore = [];
        this.top = 0;
        this.push = push;
        this.pop = pop;
        this.peek = peek;
        this.length = length;
    }

    function push(element) {
        this.dataStore[this.top++] = element;
    }

    function pop() {
        return this.dataStore[--this.top];
    }

    function peek() {
        return this.dataStore[this.top - 1];
    }

    function length() {
        return this.top;
    }

    function clear() {
        this.top = 0;
    }

    var s = new Stack();
    s.push("David");
    s.push("Raymond");
    s.push("Bryan");
    console.log("length:" + s.length());
    console.log(s.peek());
    var popped = s.pop();
    console.log("The popped element is " + popped);