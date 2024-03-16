// filters.js
const filters = {
    calculateAge(birthday) {
        const today = new Date();
        const birthDate = new Date(birthday);
        let age = today.getFullYear() - birthDate.getFullYear();
        const month = today.getMonth() - birthDate.getMonth();
        if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    },
    formatDate(value, divisor = '/', includeYear = true) {
        const date = new Date(value);
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        let result = `${month}${divisor}${day}`;
        if (includeYear) {
            const year = date.getFullYear();
            result = `${year}${divisor}${result}`;
        }
        return result;
    },
    formatTime(timeString) {
        const date = new Date(timeString);
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        return `${hours}:${minutes}`;
    }

};

export default filters;
