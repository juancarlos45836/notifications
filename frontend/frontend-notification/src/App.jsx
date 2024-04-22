import { useEffect, useState } from "react";
import "./App.css";

function App() {
    const [data, setData] = useState([]);
    const [selectedCategory, setSelectedCategory] = useState("Sports");
    const [textAreaContent, setTextAreaContent] = useState("");
    useEffect(() => {
        fetch("http://localhost:8000/api/categories")
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                setData(data);
            })
            .catch((error) => {
                console.log("Ocurrio un Error", error);
            });
    }, []);
    const handleSelectChange = (event) => {
        setSelectedCategory(event.target.value);
    };

    const handleTextAreaChange = (event) => {
        setTextAreaContent(event.target.value);
    };

    const handleSubmit = async (event) => {
        event.preventDefault();
        const formData = {
            category: selectedCategory,
            description: textAreaContent,
        };
        console.log("Submitting form", formData);

        try {
            const response = await fetch("http://localhost:8000/api/logs", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(formData),
            });

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            console.log("Success:", data);
        } catch (error) {
            console.error("Error:", error);
        }
    };
    console.log(selectedCategory, textAreaContent);
    return (
        <>
            <div className=" w-full h-auto">
                <h1 className="text-2xl">Submission Form</h1>
                <form className="flex flex-col justify-center items-center">
                    <select
                        className="border-solid border-black border-[2px] m-5"
                        name="select"
                        value={selectedCategory}
                        onChange={handleSelectChange}
                    >
                        {data &&
                            data.length > 0 &&
                            data.map((category, index) => (
                                <option key={index} value={category.name}>
                                    {category.name}
                                </option>
                            ))}
                    </select>
                    <textarea
                        className="border-solid border-black border-[2px] m-5"
                        name="textarea"
                        id="texarea"
                        cols="30"
                        rows="10"
                        value={textAreaContent}
                        onChange={handleTextAreaChange}
                    ></textarea>
                    <button
                        onClick={handleSubmit}
                        className="w-20 rounded-lg bg-blue-600 m-5"
                        type="submit"
                    >
                        Enviar
                    </button>
                </form>
            </div>
        </>
    );
}

export default App;
