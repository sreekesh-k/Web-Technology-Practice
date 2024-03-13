function quadraticEquationSolver(a, b, c) {
    const discriminant = b * b - 4 * a * c;
    if (discriminant > 0) {
        const root1 = (-b + Math.sqrt(discriminant)) / (2 * a);
        const root2 = (-b - Math.sqrt(discriminant)) / (2 * a);
        return [root1, root2];
    } else if (discriminant === 0) {
        const root = -b / (2 * a);
        return [root];
    } else {
        return [];
    }
}

console.log(quadraticEquationSolver(1, -3, 2));