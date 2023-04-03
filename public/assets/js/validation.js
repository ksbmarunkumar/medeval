
function validateMcqForm() {

    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Please Select");

    jQuery("#form_area").validate({
        rules: {
            test_name: 'required',
            duration: 'required',
            no_of_que: 'required',
            subject_id: { valueNotEquals: "false" },
            branch_id: { valueNotEquals: "false" },
            'question[]': 'required',
            'que_marks[]': 'required',
            'answer1[]': 'required',
            'answer2[]': 'required',
            'answer3[]': 'required',
            'answer4[]': 'required',
            'right_ans[]': { valueNotEquals: "false" },
        }
    });
}


function validateShortQueForm() {
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Please Select");

    jQuery("#form_area").validate({
        rules: {
            test_name: 'required',
            duration: 'required',
            subject_id: { valueNotEquals: "false" },
            branch_id: { valueNotEquals: "false" },
            'question[]': 'required',
            'que_marks[]': 'required',
            'time_duration[]': 'required',
            'answer[]': 'required',
        }
    });
}

function validateOpsListForm() {
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Please Select");

    jQuery("#form_area").validate({
        rules: {
            test_name: 'required',
            duration: 'required',
            subject_id: { valueNotEquals: "false" },
            branch_id: { valueNotEquals: "false" },
            'question[]': 'required',
            'que_marks[]': 'required',
            'no_of_step[]': 'required'
        }
    });
}

function updateDurationOnAddOrRemove(d) {
    $("#form_row").find(".time_duration").each((element, obj) => {
        console.log(obj.value)
        if (obj.value) {
            d = d + parseInt(obj.value)
        }
    });
    $("#total_duration").val(d)
}

// let duration = 0
// let totalMarks = 0
// let totalQuestion = 1

function updateTotalMarksOnAddOrRemove(s, praentId, findClass, totalId) {
    $(`#${praentId}`).find(`.${findClass}`).each((element, obj) => {
        console.log(obj.value)
        if (obj.value) {
            s = s + parseInt(obj.value)
        }
    });
    $(`#${totalId}`).val(s)
}


function updateTotalMarks() {
    $("#total_marks").val(0)
    totalMarks = 0

    $("#form_row").find(".que_marks").each((element, obj) => {
        console.log(obj.value)
        if (obj.value) {
            totalMarks = totalMarks + parseInt(obj.value)
        }
    });
    $("#total_marks").val(totalMarks)

}


function updateTotalDuration() {
    $("#total_duration").val(0)
    duration = 0

    $("#form_row").find(".time_duration").each((element, obj) => {
        console.log(obj.value)
        if (obj.value) {
            duration = duration + parseInt(obj.value)
        }
    });
    $("#total_duration").val(duration)
}

function updateTotalQuestions(tq) {

    $("#form_row").find(".trcounter").each((element, obj) => {
        console.log("Question Counts", element)
        if (element) {
            tq = element + 1
        } else {
            tq = 1
        }
    });

    $("#total_question").val(tq)
}

function updateTotalQuestions(tq) {

    $("#form_row").find(".trcounter").each((element, obj) => {
        console.log("Question Counts", element)
        if (element) {
            tq = element + 1
        } else {
            tq = 1
        }
    });

    $("#total_question").val(tq)
}


function validateCreateTestForm(){
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Please Select");

    jQuery("#form_area").validate({
        rules: {
            test_name: 'required',   
            date:'required',
            subject_id: { valueNotEquals: "false" },
            branch_id: { valueNotEquals: "false" },
        }
            
    });
}