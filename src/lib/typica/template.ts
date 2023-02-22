export const template = (strings: TemplateStringsArray, ...expressions: Array<string | number | void>) => {
    const html: Array<string | number> = [];
    let currentExpression = 0;

    strings.forEach((str) => {
        html.push(str);
        const expression = expressions[currentExpression];

        if (expression) {
            if (Array.isArray(expression)) {
                html.push(expression.join(''));
            } else {
                html.push(expression);
            }

            currentExpression++;
        }
    });

    return html.join('');
};

export const html = template;
