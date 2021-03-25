class Node {
    constructor(value) {
        this.data = value;
        this.next = null;
    }
}

class List {
    constructor() {
        this.head = null;
        this.length = 0;
    }
    add(value) {
        let node = new Node(value);
        if (this.length === 0)
            this.head = node;
        else {
            let current = this.head;
            while(current.next)
            current = current.next;
            current.next = new Node(value);
        }
        this.length++;
    }
    remove(value) {
        if (this.head.data === value) {
            this.head = this.head.next;
            this.length--;
            return true;
        } else
            for (let current = this.head; current.next; current = current.next)
                if (current.next.data === value) {
                    current.next = current.next.next;
                    this.length--;
                    return true;
                }
        return false;
    }
    contains(value) {
        for (let current = this.head; current; current = current.next)
            if (current.data === value)
                return true;
        return false;
    }
    [Symbol.iterator] = function() {
        let current = this.head;
        return {
            next() {
                if (current) {
                    let value = current.data;
                    current = current.next;
                    return {value: value, done: false};
                }
                return {done: true};
            }
        };
    };
    clear() {
        this.head = null;
    }
    count() {
        return this.length;
    }
    log() {
        let result = '';
        for (let current = this.head; current; current = current.next) {
            result += current.data;
            if (current.next)
            result += ', ';
        }
        console.log(result);
    }
}
let createLinkedList = (arr) => {
    const l_list = new List();
    arr.forEach(value => l_list.add(value));
    return l_list;
}

export {createLinkedList};